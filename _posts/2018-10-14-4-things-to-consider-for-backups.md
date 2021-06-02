---
layout:	post
title:	"4 Things To Consider For Backups"
date:	2018-10-14
---

  ![](/img/1*QOsU_Tk9SbPqfT0OpzKH7w.jpeg)
  > We store everything we need on these things
  
  Since becoming a DBA, I have learned that something as simple as a backup can actually come with a lot of caveats that may not have simple solutions. In my mind beforehand and have worked at other tech places, backing up data was a simple backup to a cloud storage or a SAN drive of some sort. You back it up once a day or once a week, that is it. If something happened such as file went missing or someone lost their computer, we can just roll back with what we got on file. However, since becoming a DBA, there are many different hurdles I never thought of or considered, especially when it comes to a high availability environment with high SLA’s. Here are 4 things to consider when creating your backup system.

### 1. Availability

The first point encompasses different aspects when it comes to availability, however, there are three primary points I want to hit on when it comes to this topic. The first aspect to think about is how accessible are your backups. If the only backups you keep are an off-site cold storage, that will be a bottleneck if there ever is a case where backups are required to bring a service online. This is typically well known not to only have off-site backups and not practiced often, but I have seen cases where that is the only way to obtain certain files and documents. Another aspect is the latency of the backup server. If the backup server is one that is on the backlog, neglected, with the oldest and outdated switch, this will cause issues of unavailability of the backup, as well as a lengthy disaster recovery process taking hours to access. Lastly, the question to ask yourself is how long would it take you from the point of learning that you will have to recover the backup, to actually getting it implemented and accessed by the service. This is in consideration of both points listed above but may also consider the method of accessing the backup.

### 2. Data Recovery

This point is not talking about bottlenecks or recommendations for disaster recovery, but rather a thought exercise of the availability of data for a disaster or a recovery process. Something to think about when creating a backup system is the frequency of the backups being created and the critical data that is being generated or collected from the point of a data loss and the latest backup. Say, backups are created at midnight every day, but sometime afterward data is corrupted, therefore any work done for that day is gone. How do you prevent that from happening? Understandably, there is little you can do to prevent several minutes of data corruption, there may be times where that is the best a company can do. However, this is something to think about, how to prevent data corruption from ruining an entire day worth of work.

### 3. Hardware and software failures

A simple answer to preventing hardware and software failures is making backups upon backups, on several different servers in several different regions of the world. However, these still happen and can still erase important data. Any part of the entire stack can fail: the backup software or script, the backup server, the archive server hard drives, network connections, a bad commit or bad query, server overload, even drive space which can fill up overnight. Layout the most critical parts of the backup systems’ stack, and implement tools to monitor and self-correct when issues arise. Always maintain off-site external backups, and create policies for data retention.

### 4. Scalability

Unfortunately, as the company and software grow, so will databases and backup sizes. With this comes a reiterated set of problems, especially with where on the stack is the system going to be overloaded, and where is expansion going to alleviate the most. Best practices to scale your scalability to implement good third-party monitoring software for just about any part of the stack, network with our database administrators with how they solved problems, and stress test your backup system to see where faults pop up.

### Ending

Hopefully, these points to look for were helpful and gave you some food for thought. Just remember, databases are some of the most complicated parts of the services and software, DBA’s handle a lot more than perceived.

  