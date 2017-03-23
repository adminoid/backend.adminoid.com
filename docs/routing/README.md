# Information about routing

## Protection from doubles of url for Baum tree of pages 
### On creation / On changing url / On moving / On opening
#### On creation
<https://laravel.com/docs/5.4/eloquent#events>
#### On changing url

#### On moving
<https://github.com/etrepat/baum#node-model-events>
#### On opening
Get page by level and url.  
May be check page for uniqueness.  

---

## The easiest solution (but for sites with many urls):
add id to each url:
site.com/category/subcategory/url-777.html
where 777 is id of page from db
and add rel=canonical for generated true full url