# PHP Unset() in Foreach Loop Bug

This repository demonstrates an uncommon but important bug in PHP related to using `unset()` inside a `foreach` loop while iterating over an array.  Modifying the array's structure during iteration can lead to unexpected results. The code shows how this can lead to not removing all instances of a value from an array. 

## Bug Description

The issue stems from how PHP's internal pointer moves through the array during the `foreach` loop. When `unset()` is called, the array's internal pointer is advanced but the array structure is altered.  Therefore, elements that would be processed in later iterations are skipped and not removed when they match the target condition.