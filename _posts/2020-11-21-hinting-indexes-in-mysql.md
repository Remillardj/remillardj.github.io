---
layout:	post
title:	"Hinting Indexes in MySQL"
date:	2020-11-21
---

# MySQL itself
Look, MySQL is a solid and if not the most capable relational database. Quite the broad statement but it's true to an extent. It does have limitations and should not be treated as a key / value database as well as data warehouse. It is a relational database, great for decent scaling with capabilities of impressive IOPS.

## Onto the issue
Unfortunately, developers do not and personally should not understand the inner workings of MySQL. However, if advised and treated as a non-relational database then that is where the issue comes into play. Allowing customers to abuse a feature that was briefly introduced as a professional services product due to a request of a high MRR customers. To reiterate and be clear, *this has no impact, no representation of my work/day job*. Now, onto the issue. The misunderstanding and perhaps politics in play cause headaches later. When clustered indexs are in, unfortunately there are things in MySQL related to SQL that the MySQL optimizer may think it is indeed doing the best possible query to the database. However, there are cases where lack of indexes rather incorrect index may cause overflow of searched an extra partition or however many extra rows, decreasing overall effiency and response times. How to fix this? To note: I said hint. In the end, the optimizer decides what it wants to do. But with SQL you can either force or ask the optimizer to use a specific index instead of a range.

> select * from _table_ use index (idx);

Simple yeah? Reiterate: this is hinting. You could force but that may have unintentional consequences. Always refer to the documentation:
* https://dev.mysql.com/doc/refman/8.0/en/optimizer-hints.html
* https://dev.mysql.com/doc/refman/8.0/en/index-hints.html

This is just one part in a very complicated table of optimization. Keep in mind there is only so much you can do and constantly tuning the database without the need may not be a good approach in keeping high availability and robustness.