---
layout:	post
title:	"Orchestrator unable to install on Raspberry Pi"
date:	2020-10-08
---

# Bummer
In my latest venture of creating a home lab, one that somewhat would mimic that of production, Orchestrator was top of my list to view MySQL topologies purely. I have little hardware available to me but a plethora of Raspberry Pi's. I figured that it would be made in good use especially since I installed a Pi hole. Installing Pi hole was easy and flawless, simply pointed my Ubiquiti Dream Machine Pro DHCP IP to the IP of the Pi hole *AND* even using Pi hole's dns server. That was the one thing that the Ubiquiti DMP really lacked, the capability of having a local domain name and accessing it via hostname instead of IP. Not only would this make orchestrator WILDLY uncomfortable to use if it's just IP's for discovery, but creating an endpoint with IP's just isn't feasible. And editing my /etc/hosts on every machine just seemed ridiculous, devices should use the routers DNS server. Fortunately Pi hole fixed that problem, easily.

## Architecture
I did not know this but Raspberry Pi's are armhf architecture, not arm64. Originally, it didn't make much sense since Raspbian is Debium linux distro based. Turns out, _armhf_ is the name given to a debian port for arm processors. So raspbian is unique in the sense of a rebuild of armhf in of itself to support the hardware that Raspberry Pi's come with to work around floating point support. Now, that is according to the top Google result regarding armhf vs. arm. Below the answer is a comment that this difference goes even further. However, it's not relevant anymore since 2015+ Debian armhf only works on newer Pi's. But why is this an issue?

Simply put, Orchestrator does NOT support this architecture and there isn't anything I can do about it. It was quite the bummer indeed. There is one venture I have yet to continue to pursue but there IS support for armhf with docker. The possibility of having Orchestrator run in a container using a macvlan therefore has its own unique address which I can then map in Pi hole to a hostname seems like the best possibility granted that orchestrator itself does not use a lot of resources.

If I get that running, that may be the first thing I share. Really could be a game changer in an environment where having one Orchestrator container per service that utilizes a solid MySQL topology would be nice. Given that each orchestrator instance uses an ACL therefore can be assigned the proper group for the development team to manage their own databases.