Magento-Quick Search Fix
======================

A fix for the quick search when Magento returns no products, or the same products regardless of the search terms. This seems to effect versions 1.4+ and can strike without warning! We had a 1.7 site that stopped searching and would return the same two products no matter what search term was used.

This problem is discussed here in detail:

http://www.magentocommerce.com/boards/viewthread/178347/P15/

We have take the code provided by 'falkone' on that thread and placed it inside a module so that non-programmers are able to patch their site correctly without breaking any core files.

Hope you find it useful, any issues let us know.
