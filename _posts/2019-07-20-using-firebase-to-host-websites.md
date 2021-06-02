---
layout:	post
title:	"Using Firebase To Host Websites"
date:	2019-07-20
---

Recently I had an itch to create websites again, in search of eventually creating a SaaS, but in order to do so, I need to have the design down. Web design was something I enjoyed deeply over a decade ago, using w3 schools to learn html and learning how file structures work. It is my old homage and a comfort zone when it comes to computers. It has been a while since I designed something, especially for a purpose, so to satisfy that itch I decided to dedicate a weekend to doing so, seeing how much I can pick up web development again.

One of the biggest issues I found when I started web development was hosting solutions. Any free-tier based web hosting is always crap and it only gets worse from there. I knew AWS has the ability to host static websites, and AWS is a topic I wanted to learn more in so I decided to delve into it.

As I log into my old account, I realize I was actually getting billed for SOMETHING, still not sure what since everything was shutdown and deleted. I logged into my GCP account and realized I had that $300 credit available to my account and asked myself if its possible to host a static website using GCP, and it is possible.

It is so simple to set something like that up, just some simple rerouting and setting buckets available, but unfortunately something I eventually noticed was that it only allows HTTP and not HTTPS. Bummer. And the more I looked into how to get an HTTPS certificate for my website, the more complicated it got with setting up loadbalancers, etc. I wanted a cheap, near free, solution to just host some pictures, html, css and maybe a tiny tiny bit of javascript.

I knew static hosting via GCP was not going to be enough, I also did not want to use GitHub to host my site even though that it possible and it does issue HTTPS certificates, I wanted it to be a little bit more hidden than a public repository. I dug around and found Firebase, a Google product that can host static websites, both HTTP and HTTPS. This was a winner.

It was so easy to integrate Travis CI with GitHub to deploy to Firebase. Only took a few hours to get that running and set up MX records to point to my firebase website. If you have a website that is simple and does not need a lot of traffic, Firebase is the way to go.

The biggest downside to using Firebase is there is a download cap, anyone viewing your website will require downloading data which will cost you money. If you have that $300 credit, you can use that for your website, however, there is a free tier of Firebase which if you do not need a lot of web traffic, this is a great solution. Feel free to take a look at the repo, particularly the travis.yml and firebase.json on how I set up Travis CI to Firebase.