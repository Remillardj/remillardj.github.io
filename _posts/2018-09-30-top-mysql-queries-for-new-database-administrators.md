---
layout:	post
title:	"Top MySQL Queries for New Database Administrators"
date:	2018-09-30
---

  Before entering the field of database administration, I wanted to look up what common queries they used to help solve any issues. Upon searching, I found some basic commands that the database administrator’s (DBA) used, although, my personal experience has been slightly different. I found that DBA’s don’t really use a handful of queries to solve issues, but rather various scripts and software to help debug problems. However, to start off with some groundwork, I found that these 3 MySQL queries helped me start to understand what and why these various scripts and software did what they did. Also, note that I typically learn best when pushed into the firehose.

### 1. Explain How To Optimizing Queries

The EXPLAIN query is often used with Data Manipulation Language (DML) queries to help you optimize queries, to simply put, make them run faster and better. Although this query can be a bit to understand at first, it was one of the few queries that were never mentioned in most commonly top result articles on MySQL queries. I wanted newer DBA’s to find this, and look into it, to help them better their databases. To help understand this query, you can look into the [MySQL documentation](https://dev.mysql.com/doc/refman/8.0/en/using-explain.html), and supplement it with various chapters from [Joe Celko’s book](https://www.amazon.com/Joe-Celkos-SQL-Smarties-Fourth/dp/0123820227).

### 2. Getting The Number of Rows in a Table

I never thought how often this query would be run, but surprisingly it is a lot more than expected. I have seen software developers and other DBA’s do this command similarly, and although which one is correct is trivial as they are essentially the same, one way could help you transition better into a different but same SQL database. The query to count the number of rows in a table follows the syntax of SELECT COUNT(1) FROM table whereas the query I am talking about is SELECT COUNT(*) FROM table

Now, in this [StackOverflow post](https://stackoverflow.com/questions/1221559/count-vs-count1-sql-server), there is no difference between COUNT(1) and COUNT(*) , however, in an [AskTOM post](https://www.quora.com/What-are-the-most-useful-MySQL-queries) from Oracle, they are stating there is a difference for Oracle DB’s, stating that COUNT(1) is a non-optimized version of COUNT(*) . So far, that seems like it’s pretty much it. To do one or the other seems unimportant, but what is important is how to get the number of rows. This query could be used to compare between a replica and snapshotted replica, to ensure that data has been transferred. Please note that this is NOT a surefire way to check, but can be a little extra for natural nature of paranoia as DBA’s.

### 3. Show Me What the Table Looks Like in Code

Compared to the previous two other queries, this might be the simplest but often overlooked when new DBA’s start. This query has helped me immensely with familiarizing myself with unknown tables, and to get a better idea of what is happening and how to improve it. DESCRIBE table or DESC table shows the layout of the table structure in code, you can see what is the foreign key, primary key, what data types are used, and so on. You do have to select a database beforehand, but this can help you with understanding your environment furthermore.

### There is Much More to Learn, There Always Will Be

To many, these queries may be simple and second nature, but to me and hopefully many other new DBA’s, this content is helpful. This is not even hitting the tip of the iceberg as a DBA, there is so much to learn and there always will be, but hopefully, this gets you started.

  