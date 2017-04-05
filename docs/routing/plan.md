# Possible events on page
-   Creating
-   Renaming
-   Moving
-   Deleting

## Creating

**Reproducing**
new Page()
Page::create()

**How detect?**
original alias is null

**What should be done?**
Check alias duplicates in siblings

## Renaming

**Reproducing**
$page->alias = 'new-alias'; $page->save();

**How detect?**
Original alias is not null

**What should be done?**
Check alias duplicates in siblings
Move folder in public/images if exist

## Moving

**Reproducing**
$page->makeChildOf($other);

**How detect?**
Catch in moving event

**What should be done?**
Check alias duplicates in new siblings { try create and save uri (uri is unique) }
Move folder in public/images if exist _{ need original and target parent_id }_

## Deleting

**Reproducing**
$page->delete()

**How detect?**
Catch in deleted event

**What should be done?**
Delete folder in public/images if exist