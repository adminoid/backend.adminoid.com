# Functional test on Page::$alias functionality

-   transform alias to #[a-z-\d]#i when creating and 

# Unit test for Page

-   Mutator for alias (if change or move)
    -   string replaces and transliteration 
    -   check doubles
    -   regenerate uri

# List of operations on each event from:
<https://laravel.com/docs/5.4/eloquent#events>  

-   creating/created
    -   fixAlias
    -   generateUri
    -   checkDoubles
-   updating/updated
-   saving/saved (what difference with updating/updated)
-   deleting/deleted
 
