<script>
  //  import {TweenLite, TimelineLite, TimelineLite, CSSPlugin} from 'gsap'
  import {TweenMax, TimelineLite} from 'gsap'
  import $ from 'jquery'
  export default {
    data () {
      return {
        timeline: null,
        topOffset: 0,
        settings: {
          topOffsetForToggleAnimation: 300
        },
        cursor: {
          x: 0,
          y: 0
        },
        selectors: {
          gsap: {
            svgLogo: '#header-logo-svg',
            leftHand: '#left-hand',
            rightHand: '#right-hand',
            manBody: '#man-full',
            head: '#head',
            eyePupil: '#eye-pupil',
            textAdminoid: '#stripped-logo-text',
            textsWebmaster: '#web-Master',
            textsWebmasterLetter: '.wm-tl',
            textWeb: 'tspan#web',
            textMaster: 'tspan#master',
            textsWebmasterWrapper: '#Rectangle-21',
            topMenu: '#top-menu',
            topMenuItem: '.item',
            // flicker
            rectangleCenterColor: '#Rectangle-Green',
            rectanglesBorderColor: '.Rectangle-Red'
          },
          eye: '#eye-pupil'
        },
        reduced: false,
        $eye: {},
        eyeTransformWithAngle: 'translate(13.000000, 36.000000) rotate(40.000000) translate(-13.000000, -36.000000) translate(8.000000, 31.000000)'
      }
    },
    mounted () {
      this.checkTopOffset()
      this.initFlicker()
      this.timeline = this.compileTimeline()
      this.timeline.reverse(0)
      this.$eye = $(this.$el).find(this.selectors.eye)
    },
    created: function () {
      window.addEventListener('scroll', this.checkTopOffset)
      window.addEventListener('mousemove', this.eyeMove)
      var jQuery = $
      jQuery(function () {
        require('../../semantic/dist/components/sidebar.min.js')
      })
    },
    beforeDestroy: function () {
      window.removeEventListener('scroll', this.checkTopOffset)
      window.removeEventListener('mousemove', this.eyeMove)
    },
    watch: {
      topOffset: function (val, oldVal) {
        if (oldVal < this.settings.topOffsetForToggleAnimation && val >= this.settings.topOffsetForToggleAnimation) {
          this.runLogoAnimation()
        } else if (oldVal >= this.settings.topOffsetForToggleAnimation && val < this.settings.topOffsetForToggleAnimation) {
          this.runLogoAnimation('backward')
        }
      }
    },
    methods: {
      eyeMove: function (e) {
        if (!this.reduced) return false
        this.cursor.x = e.pageX
        this.cursor.y = e.pageY

        let eyeCenter = [this.$eye.offset().left + this.$eye.width() / 2, this.$eye.offset().top + this.$eye.height() / 2]
        let eyeAngle = Math.atan2(e.pageX - eyeCenter[0], -(e.pageY - eyeCenter[1])) * (180 / Math.PI) - 90
        this.eyeTransformWithAngle = 'translate(13.000000, 36.000000) rotate(' + eyeAngle + ') translate(-13.000000, -36.000000) translate(8.000000, 31.000000)'
      },
      toggleSidebar: function () {
        $('#top-menu-sidebar')
        .sidebar({
          transition: 'overlay'
        })
        .sidebar('toggle')
      },
      initFlicker: function () {
        var step = 1
        TweenMax.to(this.selectors.gsap.rectangleCenterColor, step, {
          fill: '#CD2E41',
          repeat: -1,
          yoyo: true,
          repeatDelay: step * 3
        })
        TweenMax.to(this.selectors.gsap.rectanglesBorderColor, step, {
          fill: '#418B1B',
          repeat: -1,
          yoyo: true,
          repeatDelay: step * 3,
          delay: step * 3
        })
        TweenMax.fromTo(this.selectors.gsap.textWeb, step * 2,
          {
            fill: '#FFFFFF'
          },
          {
            fill: '#FF981C',
            repeat: -1,
            repeatDelay: step * 2,
            yoyo: true
          })
        TweenMax.fromTo(this.selectors.gsap.textMaster, step * 2,
          {
            fill: '#FF981C'
          },
          {
            fill: '#FFFFFF',
            repeat: -1,
            repeatDelay: step * 2,
            yoyo: true
          })
      },
      runLogoAnimation: function (direction = 'forward') {
        if (direction === 'forward') {
          this.reduced = true
          this.timeline.pause().play()
        } else if (direction === 'backward') {
          this.reduced = false
          this.timeline.pause().reverse()
        }
      },
      checkTopOffset: function () {
        this.topOffset = window.pageYOffset
      },
      compileTimeline: function () {
        let part1time = 0.2
        let part2time = 0.5
        var $logo = $(this.selectors.gsap.svgLogo)
        var $leftHand = $logo.find(this.selectors.gsap.leftHand)
        var $rightHand = $logo.find(this.selectors.gsap.rightHand)
        var $manBody = $logo.find(this.selectors.gsap.manBody)
        var $head = $logo.find(this.selectors.gsap.head)
        var $eyePupil = $logo.find(this.selectors.gsap.eyePupil)
        var $textAdminoid = $logo.find(this.selectors.gsap.textAdminoid)
        var lettersWebmaster = Array.prototype.slice.call(
            $logo.find(this.selectors.gsap.textsWebmaster).find(this.selectors.gsap.textsWebmasterLetter)
        )
        var textsWebmasterWrapper = $logo.find(this.selectors.gsap.textsWebmasterWrapper)
        var $topMenu = $(document).find(this.selectors.gsap.topMenu)
        var topMenuItemsForResizing = Array.prototype.slice.call($topMenu.find(this.selectors.gsap.topMenuItem))
        topMenuItemsForResizing.push($topMenu)
        // Hands (waving)
        var tlLeftHand = new TimelineLite()
        tlLeftHand.add(TweenMax.fromTo($leftHand, 0.08, {
          rotation: 0
        }, {
          rotation: 35,
          transformOrigin: '90% 100%'
        }))
        tlLeftHand.add(TweenMax.to($leftHand, 0.08, {rotation: -50, transformOrigin: '90% 100%'}))
        tlLeftHand.add(TweenMax.to($leftHand, 0.08, {rotation: 35, transformOrigin: '90% 100%'}))
        tlLeftHand.add(TweenMax.to($leftHand, 0.08, {rotation: -50, transformOrigin: '90% 100%'}))
        tlLeftHand.add(TweenMax.to($leftHand, 0.08, {rotation: 35, transformOrigin: '90% 100%'}))
        tlLeftHand.add(TweenMax.to($leftHand, 0.08, {rotation: -50, transformOrigin: '90% 100%'}))
        tlLeftHand.add(TweenMax.to($leftHand, 0.10, {rotation: 35, transformOrigin: '90% 100%'}))
        tlLeftHand.add(TweenMax.to($leftHand, 0.15, {rotation: -75, transformOrigin: '90% 100%'}))
        var tlRightHand = new TimelineLite()
        tlRightHand.add(TweenMax.fromTo($rightHand, 0.08, {
          rotation: 0
        }, {
          rotation: -35,
          transformOrigin: '10% 100%'
        }))
        tlRightHand.add(TweenMax.to($rightHand, 0.08, {rotation: 50, transformOrigin: '10% 100%'}))
        tlRightHand.add(TweenMax.to($rightHand, 0.08, {rotation: -35, transformOrigin: '10% 100%'}))
        tlRightHand.add(TweenMax.to($rightHand, 0.08, {rotation: 50, transformOrigin: '10% 100%'}))
        tlRightHand.add(TweenMax.to($rightHand, 0.08, {rotation: -35, transformOrigin: '10% 100%'}))
        tlRightHand.add(TweenMax.to($rightHand, 0.08, {rotation: 50, transformOrigin: '10% 100%'}))
        tlRightHand.add(TweenMax.to($rightHand, 0.10, {rotation: -35, transformOrigin: '10% 100%'}))
        tlRightHand.add(TweenMax.to($rightHand, 0.15, {rotation: 75, transformOrigin: '10% 100%'}))
        var tlHands = new TimelineLite()
        tlHands.add(tlLeftHand, 0)
        tlHands.add(tlRightHand, 0)
        // Body, part 1
        var tlBody = new TimelineLite()
        tlBody.add(TweenMax.fromTo($manBody, part1time,
            {y: 0, x: 0, rotation: 0},
            {y: -10, x: 20, rotation: 35, transformOrigin: '50% 50%'}
        ), 0)
        // Body, part 2
        tlBody.add(TweenMax.fromTo($manBody, part2time,
            {y: -10, x: 20, rotation: 35, transformOrigin: '50% 50%'},
            {y: -5, x: 180, rotation: 90, transformOrigin: '50% 50%'}
        ), part1time)
        // Head
        var tlHead = new TimelineLite()
        tlHead.fromTo($head, 0.3,
            {autoAlpha: 1},
            {autoAlpha: 0}
        )
        // SVG img size (begin from part1time)
        var tlLogoSize = new TimelineLite()
        tlLogoSize.add(TweenMax.fromTo($logo, part1time,
            {attr: {viewBox: '0 0 219 42'}, width: 219, height: 53},
            {attr: {viewBox: '0 0 239 53'}, width: 219, height: 42}
        ), part1time)
        // Eye-pupil
        var tlEyePupil = new TimelineLite()
        tlEyePupil.add(TweenMax.fromTo($eyePupil, part1time,
            {autoAlpha: 0},
            {autoAlpha: 1}
        ), part1time)
        // Text adminoid
        var tlTextAdminoid = new TimelineLite()
        tlTextAdminoid.add(TweenMax.fromTo($textAdminoid, part1time + part2time,
            {x: 0, y: 24},
            {x: -50, y: 7}
        ))
        // Text webmaster textsWebmaster
        var tlTextWebmaster = new TimelineLite()
        tlTextWebmaster.add(
            TweenMax.staggerFromTo(lettersWebmaster.reverse(), (0.1),
                {autoAlpha: 1, rotateX: 0},
                {autoAlpha: 0, rotateX: 10},
                0.05
            )
        )
        // Webmaster Wrapper
        var tlTextWebmasterWrapper = new TimelineLite()
        tlTextWebmasterWrapper.add(TweenMax.fromTo(textsWebmasterWrapper, 0.5,
            {autoAlpha: 1},
            {autoAlpha: 0}
        ), 0.2)
        // TopMenu height reduction/increase
        var tlTopMenu = new TimelineLite()
        tlTopMenu.add(TweenMax.staggerFromTo(topMenuItemsForResizing, part1time,
            {height: '4.66667rem', opacity: 1},
            {height: '3.66667rem', opacity: 0.93},
            0
        ), part1time)
        // Conclusion
        var timeline = new TimelineLite({paused: true})
        timeline.add(tlHands, 0)
        timeline.add(tlBody, 0)
        timeline.add(tlHead, 0)
        timeline.add(tlLogoSize, 0)
        timeline.add(tlEyePupil, 0)
        timeline.add(tlTextAdminoid, 0)
        timeline.add(tlTextWebmaster, 0)
        timeline.add(tlTextWebmasterWrapper, 0)
        timeline.add(tlTopMenu, 0)
        return timeline
      }
    }
  }
</script>
<template>
  <div class="ui fixed menu" id="top-menu">
    <div class="ui grid container">
      <div class="four wide column">
        <div id="header-logo" class="header item">
          <a href="/">
            <svg id="header-logo-svg" width="219px" height="53px" viewBox="0 0 219 53" version="1.1"
                 xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink">
              <!-- Generator: Sketch 41.2 (35397) - http://www.bohemiancoding.com/sketch -->
              <title>static/img/temp/adminoid/header/adminoid-logo-svg</title>
              <desc>Created with Sketch.</desc>
              <defs>
                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
                  <stop stop-color="#002555" offset="0%"></stop>
                  <stop stop-color="#1D60B5" offset="100%"></stop>
                </linearGradient>
                <path
                    d="M4.9137931,0.362976407 L5.06157635,2.30490018 C6.24384828,0.768292377 7.78939932,0 9.69827586,0 C13.1342536,0 14.9014773,2.3653726 15,7.09618875 L15,20 L9.75369458,20 L9.75369458,7.47731397 C9.75369458,6.36418076 9.5843613,5.55656633 9.24568966,5.05444646 C8.90701801,4.55232659 8.31281213,4.30127042 7.46305419,4.30127042 C6.51477358,4.30127042 5.77586472,4.77918457 5.24630542,5.73502722 L5.24630542,20 L0,20 L0,0.362976407 L4.9137931,0.362976407 Z"
                    id="path-2"></path>
              </defs>
              <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="static/img/temp/adminoid/header/adminoid-logo-svg">
                  <g id="adminoid/header/full/logo">
                    <g id="adminoid/header/full/logo/texts" transform="translate(58.000000, 0.000000)">
                      <g id="Logo-text" transform="translate(0.000000, -1.000000)">
                        <g id="webmaster" transform="translate(34.000000, 0.000000)">
                          <rect id="Rectangle-21" fill-opacity="0.900000036" fill="url(#linearGradient-1)" x="0"
                                y="1" width="78" height="17" rx="8"></rect>
                          <text id="web-Master" font-family="RobotoSlab-Regular, Roboto Slab" font-size="13"
                                font-weight="normal">
                            <tspan id="web" x="5" y="14" fill="#FFFFFF">
                              <tspan dx="-1" class="wm-tl">w</tspan>
                              <tspan dx="-3" class="wm-tl">e</tspan>
                              <tspan dx="-3" class="wm-tl">b</tspan>
                            </tspan>
                            <tspan id="master" x="30.2636719" y="14" fill="#FF981C">
                              <tspan class="wm-tl">M</tspan>
                              <tspan dx="-3" class="wm-tl">a</tspan>
                              <tspan dx="-3" class="wm-tl">s</tspan>
                              <tspan dx="-3" class="wm-tl">t</tspan>
                              <tspan dx="-3" class="wm-tl">e</tspan>
                              <tspan dx="-3" class="wm-tl">r</tspan>
                            </tspan>
                          </text>
                        </g>
                        <g id="stripped-logo-text" transform="translate(0.000000, 24.000000)">
                          <g id="Logo-text">
                            <path
                                d="M14.8579978,23.547188 L7.52048903,23.547188 L6.09324294,29 L0.402556591,29 L8.7281588,2.35807292 L13.650328,2.35807292 L22.0308243,29 L16.2852439,29 L14.8579978,23.547188 Z M8.69156275,19.0641714 L13.6686261,19.0641714 L11.1800944,9.56749549 L8.69156275,19.0641714 Z M23.5678586,18.4969326 C23.5678586,15.2520663 24.1167939,12.8306516 25.214681,11.2326159 C26.3125681,9.63458027 27.9105798,8.83557442 30.008764,8.83557442 C31.5336072,8.83557442 32.8022577,9.4942968 33.8147536,10.8117613 L33.8147536,0.894230769 L39.0296913,0.894230769 L39.0296913,29 L34.3270984,29 L34.089224,26.987217 C33.0279331,28.573054 31.6616941,29.3659605 29.990466,29.3659605 C27.9166793,29.3659605 26.3339158,28.573054 25.242128,26.987217 C24.1503403,25.4013801 23.5922561,23.0714547 23.5678586,19.9973708 L23.5678586,18.4969326 Z M28.7644982,19.7960925 C28.7644982,21.7478918 28.9718738,23.1110812 29.3866311,23.8857015 C29.8013885,24.6603218 30.5028058,25.0476262 31.4909042,25.0476262 C32.5155988,25.0476262 33.2902075,24.5901801 33.8147536,23.6752742 L33.8147536,14.6360489 C33.3024063,13.6601493 32.5338969,13.1722068 31.5092022,13.1722068 C30.5577001,13.1722068 29.862382,13.5564615 29.4232272,14.3249825 C28.9840723,15.0935034 28.7644982,16.4597425 28.7644982,18.4237405 L28.7644982,19.7960925 Z M47.702956,9.20153496 L47.8493402,11.0313376 C49.008221,9.56748817 50.5391406,8.83557442 52.4421449,8.83557442 C54.4183417,8.83557442 55.8150771,9.72606949 56.6323931,11.5070863 C57.7668764,9.72606949 59.383186,8.83557442 61.4813702,8.83557442 C64.9458139,8.83557442 66.7207048,11.232592 66.806096,16.026699 L66.806096,29 L61.6277544,29 L61.6277544,16.3560635 C61.6277544,15.2093814 61.4691731,14.3920777 61.1520057,13.9041279 C60.8348383,13.416178 60.2981016,13.1722068 59.5417793,13.1722068 C58.5780784,13.1722068 57.8583633,13.7638371 57.3826122,14.9471154 L57.4192082,15.5692483 L57.4192082,29 L52.2408666,29 L52.2408666,16.3926595 C52.2408666,15.2581762 52.0883846,14.4378228 51.783416,13.9315749 C51.4784473,13.425327 50.9356113,13.1722068 50.1548916,13.1722068 C49.2643832,13.1722068 48.5568665,13.65405 48.0323205,14.6177509 L48.0323205,29 L42.8539789,29 L42.8539789,9.20153496 L47.702956,9.20153496 Z M76.0648976,29 L70.868258,29 L70.868258,9.20153496 L76.0648976,9.20153496 L76.0648976,29 Z M70.6303836,4.07808744 C70.6303836,3.27297023 70.8865534,2.61424785 71.3989007,2.10190054 C71.9112481,1.58955323 72.5943676,1.33338341 73.4482797,1.33338341 C74.3021919,1.33338341 74.9853114,1.58955323 75.4976588,2.10190054 C76.0100061,2.61424785 76.2661759,3.27297023 76.2661759,4.07808744 C76.2661759,4.8710059 76.0130557,5.52972828 75.5068078,6.05427434 C75.0005598,6.5788204 74.3143907,6.84108949 73.4482797,6.84108949 C72.5821688,6.84108949 71.8959997,6.5788204 71.3897517,6.05427434 C70.8835038,5.52972828 70.6303836,4.8710059 70.6303836,4.07808744 L70.6303836,4.07808744 Z"
                                id="Admi" fill="#418B1B"></path>
                            <path
                                d="M98.5116311,18.4603365 C98.5116311,15.4594451 99.2191477,13.1051226 100.634202,11.3972982 C102.049257,9.6894738 104.007126,8.83557442 106.507869,8.83557442 C109.033009,8.83557442 111.003077,9.6894738 112.418132,11.3972982 C113.833186,13.1051226 114.540703,15.4716437 114.540703,18.4969326 L114.540703,19.7594964 C114.540703,22.7725866 113.839285,25.1269092 112.43643,26.8225348 C111.033574,28.5181604 109.069605,29.3659605 106.544465,29.3659605 C104.007126,29.3659605 102.034008,28.5151108 100.625053,26.8133858 C99.2160981,25.1116608 98.5116311,22.7481893 98.5116311,19.7229004 L98.5116311,18.4603365 Z M103.708271,19.7594964 C103.708271,23.2971327 104.653659,25.0659242 106.544465,25.0659242 C108.288886,25.0659242 109.228175,23.5898982 109.362361,20.6378017 L109.380659,18.4603365 C109.380659,16.6549222 109.130589,15.31613 108.63044,14.4439196 C108.130291,13.5717093 107.422775,13.1356107 106.507869,13.1356107 C105.629559,13.1356107 104.94339,13.5717093 104.449341,14.4439196 C103.955292,15.31613 103.708271,16.6549222 103.708271,18.4603365 L103.708271,19.7594964 Z M123.195669,29 L117.99903,29 L117.99903,9.20153496 L123.195669,9.20153496 L123.195669,29 Z M117.761155,4.07808744 C117.761155,3.27297023 118.017325,2.61424785 118.529672,2.10190054 C119.04202,1.58955323 119.725139,1.33338341 120.579051,1.33338341 C121.432964,1.33338341 122.116083,1.58955323 122.62843,2.10190054 C123.140778,2.61424785 123.396948,3.27297023 123.396948,4.07808744 C123.396948,4.8710059 123.143827,5.52972828 122.63758,6.05427434 C122.131332,6.5788204 121.445162,6.84108949 120.579051,6.84108949 C119.712941,6.84108949 119.026771,6.5788204 118.520523,6.05427434 C118.014276,5.52972828 117.761155,4.8710059 117.761155,4.07808744 L117.761155,4.07808744 Z M126.507612,18.4969326 C126.507612,15.2520663 127.056547,12.8306516 128.154435,11.2326159 C129.252322,9.63458027 130.850333,8.83557442 132.948518,8.83557442 C134.473361,8.83557442 135.742011,9.4942968 136.754507,10.8117613 L136.754507,0.894230769 L141.969445,0.894230769 L141.969445,29 L137.266852,29 L137.028978,26.987217 C135.967687,28.573054 134.601448,29.3659605 132.93022,29.3659605 C130.856433,29.3659605 129.273669,28.573054 128.181882,26.987217 C127.090094,25.4013801 126.53201,23.0714547 126.507612,19.9973708 L126.507612,18.4969326 Z M131.704252,19.7960925 C131.704252,21.7478918 131.911627,23.1110812 132.326385,23.8857015 C132.741142,24.6603218 133.442559,25.0476262 134.430658,25.0476262 C135.455352,25.0476262 136.229961,24.5901801 136.754507,23.6752742 L136.754507,14.6360489 C136.24216,13.6601493 135.47365,13.1722068 134.448956,13.1722068 C133.497454,13.1722068 132.802136,13.5564615 132.362981,14.3249825 C131.923826,15.0935034 131.704252,16.4597425 131.704252,18.4237405 L131.704252,19.7960925 Z"
                                id="oid" fill="#CD2E41"></path>
                          </g>
                          <g id="stripped-n" transform="translate(80.000000, 9.000000)">
                            <mask id="mask-3" fill="white">
                              <use xlink:href="#path-2"></use>
                            </mask>
                            <use id="n-mask" fill="#418B1B" xlink:href="#path-2"></use>
                            <g id="stripe" mask="url(#mask-3)">
                              <g transform="translate(-2.000000, 0.000000)">
                                <rect id="Rectangle-Green" fill="#418B1B" x="1" y="0" width="17" height="20"></rect>
                                <rect class="Rectangle-Red" fill="#CD2E41" x="0" y="18" width="21"
                                      height="2"></rect>
                                <rect class="Rectangle-Red" fill="#CD2E41" x="0" y="14" width="21"
                                      height="2"></rect>
                                <rect class="Rectangle-Red" fill="#CD2E41" x="0" y="10" width="21"
                                      height="2"></rect>
                                <rect class="Rectangle-Red" fill="#CD2E41" x="0" y="6" width="21" height="2"></rect>
                                <rect class="Rectangle-Red" fill="#CD2E41" x="0" y="2" width="21" height="2"></rect>
                              </g>
                            </g>
                          </g>
                        </g>
                      </g>
                    </g>
                    <g id="adminoid/header/full/logo/man-new">
                      <g id="man-full">
                        <rect id="foots" fill="#CD2E41" x="0" y="49" width="40" height="3" rx="1.5"></rect>
                        <path
                            d="M20,25.5 C20,24.6715729 20.671656,24 21.497101,24 L30,24 L38.502899,24 C39.329725,24 40,24.6657972 40,25.5 L40,25.5 C40,26.3284271 39.328344,27 38.502899,27 L30,27 L21.497101,27 C20.670275,27 20,26.3342028 20,25.5 L20,25.5 Z"
                            id="right-hand" fill="#CD2E41"></path>
                        <path
                            d="M0,25.5 C0,24.6715729 0.671655983,24 1.49710104,24 L10,24 L18.502899,24 C19.329725,24 20,24.6657972 20,25.5 L20,25.5 C20,26.3284271 19.328344,27 18.502899,27 L10,27 L1.49710104,27 C0.670274966,27 0,26.3342028 0,25.5 L0,25.5 Z"
                            id="left-hand" fill="#CD2E41"></path>
                        <g id="body-head" transform="translate(7.000000, 0.000000)">
                          <path
                              d="M12,14 L11.7619048,14 L0,52 L26,52 L14.2380952,14 L14,14 C14,13.4477153 13.5522847,13 13,13 C12.4477153,13 12,13.4477153 12,14 Z"
                              id="Combined-Shape" fill="#CD2E41"></path>
                          <g id="eye-pupil"
                             :transform="eyeTransformWithAngle">
                            <path
                                d="M5,10 C7.76142375,10 10,7.76142375 10,5 C10,2.23857625 7.76142375,0 5,0 C2.23857625,0 0,2.23857625 0,5 C0,7.76142375 2.23857625,10 5,10 Z"
                                id="eye" fill="#FFFFFF"></path>
                            <path
                                d="M5,5 C6.1045695,5 7,4.1045695 7,3 C7,1.8954305 6.1045695,1 5,1 C3.8954305,1 3,1.8954305 3,3 C3,4.1045695 3.8954305,5 5,5 Z"
                                id="pupil" fill="#1254B0"></path>
                          </g>
                          <circle id="head" fill="#CD2E41" cx="13" cy="5" r="5"></circle>
                        </g>

                        <rect id="foots" x="0" y="49" width="40" height="3" rx="1.5"></rect>
                      </g>
                    </g>

                  </g>
                  <path
                      d="M19.7825394,27.1658829 C19.7825394,27.1658829 44.8446002,14.907786 67.0243645,14.907786 C80.4760792,14.907786 125.433539,23.5315614 154.553558,27.1658829 C162.189247,28.1188543 163.726226,28.596198 174.584333,28.596198 C185.442439,28.596198 195,27.3653861 195,27.3653861"
                      id="motion-path" stroke="none" fill="none"></path>
                  <path d="M71.5,38.5 L20.823062,27.1169031" id="move-path" stroke="none"></path>
                </g>
              </g>
            </svg>
          </a>
        </div>
      </div>
      <div class="right floated right aligned column mobile tablet only" id="micro-menu-wr">
        <div class=" item">
          <svg id="micro-menu-svg" width="46px"
               height="36px" viewBox="0 0 46 36" version="1.1" xmlns="http://www.w3.org/2000/svg"
               @click="toggleSidebar"
               xmlns:xlink="http://www.w3.org/1999/xlink">
            <title>Mobile-menu</title>
            <desc>Created with Sketch.</desc>
            <defs>
              <rect id="path-1" x="0" y="0" width="42" height="32" rx="4"></rect>
              <mask id="mask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="-2"
                    y="-2" width="46" height="36">
                <rect x="-2" y="-2" width="46" height="36" fill="white"></rect>
                <use xlink:href="#path-1" fill="black"></use>
              </mask>
            </defs>
            <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="adminoid/header/short/sm" transform="translate(-663.000000, -7.000000)">
                <g id="adminoid/header/short/mobile">
                  <g id="Mobile-menu" transform="translate(665.000000, 9.000000)">
                    <g id="Rectangle-28">
                      <use id="Rectangle-28-fill" fill="#FFFFFF" fill-rule="evenodd"
                           xlink:href="#path-1"></use>
                      <use id="Rectangle-28-stroke" stroke="#1154B0" mask="url(#mask-2)"
                           stroke-width="4"
                           stroke-linecap="square" xlink:href="#path-1"></use>
                    </g>
                    <path class="svg-lines" d="M10.5,10 L31.8232396,10" id="Line" stroke="#0049AA"
                          stroke-width="2"
                          stroke-linecap="square"></path>
                    <path class="svg-lines" d="M10.5,16 L31.8232396,16" id="Line-2" stroke="#0049AA"
                          stroke-width="2"
                          stroke-linecap="square"></path>
                    <path class="svg-lines" d="M10.5,22 L31.8232396,22" id="Line-3" stroke="#0049AA"
                          stroke-width="2"
                          stroke-linecap="square"></path>
                  </g>
                </g>
              </g>
            </g>
          </svg>

        </div>
      </div>

      <div class="twelve wide column computer widescreen largescreen only">
        <div class="ui five item menu">
          <a href="/" class="item">
            Главная
          </a>
          <a href="/process.html" class="item">
            Процесс
          </a>
          <a href="/price.html" class="item active">
            Цена
          </a>
          <a href="/portfolio.html" class="item">
            Портфолио
          </a>
          <a href="/tools.html" class="item">
            Инструменты
          </a>
        </div>
      </div>
    </div>
  </div>
</template>