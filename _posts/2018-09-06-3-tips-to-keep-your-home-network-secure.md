---
layout: post
title:  "3 Tips To Keep Your Home Network Secure"
date:   2018-09-06
categories: [technology, security]
tags: [technology, network, security]
---

As technology around us becomes more advanced and connected to the internet, there becomes more of a reach of vulnerability with our day to day lives. While going to friends and family houses, I have noticed that regular consumer or day-to-day people are hardly aware of how easy it is for hackers to own their network. So to spread awareness, here are three tips to help keep your home network secure.

## 1. Set a router password
Most people are not aware that you can access your routers machine by entering it’s [Internet Protocol (IP)](https://en.wikipedia.org/wiki/IP_address) Address when connected to your WiFi. You can find the router or modems IP address by opening up Command Prompt for Windows and typing in the following code.

```bash
ipconfig
```
Scroll down using the scroll bar, and look for a set of numbers by ‘Default Gateway’, that will look something along the lines of 10.0.0.1 or 192.168.1.1

If you are on an Apple machine, you open Terminal and type in netstat -rn | grep default to figure out what the router IP address is. Or, you can open up System Preferences > Network > Click 'Advanced' > Click 'TCP/IP'. From there, there will be a row that says router, followed by the IP address.

If you copy and paste that address into your web browser, it should pop up with a login pop up, or a login page. If you have not set your router or modems password, the username should be admin, and the password would be password. In some cases, there is not a username, and in some cases, there will no username and password. If you want to be sure, you can visit [this page](https://192-168-1-1ip.mobi/default-router-passwords-list/) to see what your factory default password is.

If you are able to get in, look around and set the router password to something secure that is easy to remember, but difficult to guess. You can use [LastPass password generator](https://www.lastpass.com/password-generator) to generate a secure but easy to read passwords.

## 2. Ensure your WiFi is set to WPA/WPA2
By default most routers when initially are set, set the WiFi encryption to WPS or WEP. Those encryptions can be pretty easily cracked, which can lead to consequences of intruders breaking into your network, and an ability to spy on your network activity. But rather, the fix is to change that to WPS to WPA/WPA2 or just WPA2. This makes it near impossible for people to break into your network.

You can make this change on your computer, but it would be best to do this through your router or modem. Showing how to do this can be difficult because every router varies in terms of where this is, but the general idea of where you want to look for is, first, log onto your router. Then look for the menu and go to Wireless > Click ‘Security Mode’ and select WPA/WPA2.

## 3. Frequently Update Router Firmware
The router you have has essentially its own operating system. Just like software or your computer needs to be updated, so does yours. This can help apply any new security patches or bug fixes. You can update the firmware from the webpage on your router and mode, access via it’s IP.