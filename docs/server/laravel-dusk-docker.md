### NOTES

## Working solution for laradock
- spin up the selenium image (selenium/standalone-chrome) as included with laradock
- in ```.env.dusk.local``` set  ```APP_URL=http://nginx``` to point to the docker nginx image
- in ```tests\DuskTestCase.php``` replace the line ```'http://localhost:9515', DesiredCapabilities::chrome()``` with ```'http://selenium:4444/wd/hub', DesiredCapabilities::chrome()```
- run ```php artisan dusk```
- ...
- PROFIT

===========================================================================================
Directions below this point were premature workarounds.

- WORK IN PROGRESS!
- When installing composer packages from within your container, the laravel/dusk/bin/chromedriver-* files are not set executable. Either do that manually afterwards, or install composer packages from your workstation.
- Might be able to simplify the chromedriver-linux problem, see https://medium.com/@splatEric/laravel-dusk-on-codeship-e37735af1759#.xwq4986dr

### Todo
- xvfb-run / xvfb are not killed after running dusk

### Steps

- Build chrome + xvfb into a container:
```docker 
RUN apt-get install -y wget && \
    wget -q -O - https://dl-ssl.google.com/linux/linux_signing_key.pub |  apt-key add - && \
    sh -c 'echo "deb [arch=amd64] http://dl.google.com/linux/chrome/deb/ stable main" >> /etc/apt/sources.list.d/google-chrome.list' && \
    apt-get update && apt-get install -y google-chrome-stable && \
    apt-get install -y xvfb
```
- (re)build your container and start it

- overload the method `buildChromeProcess` in the `Laravel\Dusk\SupportsChrome` trait by adding the following code to your `tests/DuskTestCase.php`:

```php
   /**
     * Build the process to run the Chromedriver.
     *
     * @return \Symfony\Component\Process\Process
     */
    protected static function buildChromeProcess()
    {
        return (new ProcessBuilder())
                ->setPrefix('xvfb-run')
                ->setArguments([
                    '../vendor/laravel/dusk/bin/chromedriver-linux'
                ])
                ->getProcess()
                ->setEnv(static::chromeEnvironment());
    }
```
- Run `php artisan dusk`

# Conclusion
Make as writes in: **Working solution for laradock**
Run: ```docker-compose up -d nginx mysql selenium```
