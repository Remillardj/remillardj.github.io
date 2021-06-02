---
layout:	post
title:	"Recovering Data From A Failing Hard Drive"
date:	2018-09-28
---

  While attending school a couple years ago, I had a friend come up to me in a frenzy, claiming his computer won’t turn on the day before finals containing all his homework as well as programs he wrote for Computer Science class. The laptop he handed me was a thick 2010 MacBook Pro that brought back nostalgia of carrying the dumbbell weight in my backpack to and from school.

When I attempted to boot it up, I noticed that it would struggle to boot into the OS, and if it did, it has horrible lag and eventually shutdown. I was able to deduce this to a corrupted OS, as he mentioned he has not updated it in a while. I did a repair on the disk from the disk repair utility upon bootup, and noticed the hard drive was formatted incorrectly. This made me start to question the years of IT experience I had.

Safe mode was not working, I could not reinstall the OS, repairing the disk did not work, I could not boot into the system, nor could I format a hard drive with the OS and boot into that. All I was left with is single user mode, which fortunately I was able to get root through an exploit at the time.

/sbin/fsck -y  
/sbin/mount -wu / # Mounts the volume of root directory with r/wOnce I logged in, I would try to move files onto a USB I plugged in, occasionally the computer would crap itself, which led me to believe that the computers hard drive is failing, and I knew I had to make it quick as how much time I had was unknown.

I checked the SMART status of my drive:diskutil info disk0 | grep -i smart

The output was exactly what I was expecting, failing. I plugged in the USB external hard drive and searched for it by doing ls /dev/disk*

Luckily it popped up after a few ls commands as /dev/disk1s2. So the next step is to create a directory in volume, than mount it and copy files over to that directory, than eject it, the hard drive should than contain the files.

mkdir /Volumes/hdd  
mount\_hfs /dev/disk1s2/ /Volumes/hddLuckily I had no errors at this point. After getting with my friend to discuss where and what files he wanted to keep, I did a multiple cp -R commands, and copied the files over to the directory.

I then ejected it, and luckily the files moved out without any issues. Boom!

  