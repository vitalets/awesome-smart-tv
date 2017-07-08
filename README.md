# Awesome Smart TV [![Awesome](https://cdn.rawgit.com/sindresorhus/awesome/d7305f38d29fed78fa85652e3a63e154dd8e8829/media/badge.svg)](https://github.com/sindresorhus/awesome)

> A curated list of awesome resources for building [Smart TV](https://en.wikipedia.org/wiki/Smart_TV) apps

<a href="https://github.com/vitalets/awesome-smart-tv"><img align="right" width="150" src="https://user-images.githubusercontent.com/1473072/27913047-7c3a5e60-6267-11e7-8bd1-bef2bf3cd753.png"/></a>

[Smart TV](https://en.wikipedia.org/wiki/Smart_TV) is a growing platform of TVs having access to internet and allowing to serf web-sites and install applications. It has own ecosystem with main players like Samsung, LG, Android TV and Apple TV. In this list you will find official and third-party resources for developing Smart TV apps and communicating with TV from remote devices.

## Contents
* [Platforms](#platforms)
  * [Samsung Tizen](#samsung-tizen)
  * [LG webOS](#lg-webos)
  * [Android TV](#android-tv)
  * [Apple tvOS](#apple-tvos)
  * [Chromecast](#chromecast)
* [Frameworks](#frameworks)
* [Tutorials](#tutorials)
* [Communication protocols](#communication-protocols)
* [Articles](#articles)
* [Videos](#articles) 
* [Community](#community)

## Platforms
Below are the most popular platforms for Smart TV. The full list is [here](https://en.wikipedia.org/wiki/List_of_smart_TV_platforms_and_middleware_software).

### Samsung Tizen
* [Tizen Developers site](https://developer.tizen.org/tizen/tv) - Apps development principles, tutorials, API documentation and packaging tools for Tizen TV apps.
* [Tizen Studio](https://developer.tizen.org/development/tizen-studio/download) - IDE for apps development and Tizen TV Emulator.
* Remote control libraries:
  * [Samrt View SDK](http://developer.samsung.com/tv/develop/tools/extension-libraries/smart-view-sdk-download) - Oficcial Android, IOS and JavaScript SDK for communication between Samsung TV and mobile device.
  * [samsungctl](https://github.com/Ape/samsungctl) - Library and command line tool for remote controlling Samsung televisions via a TCP/IP connection. It currently supports both pre-2016 TVs as well most of the modern Tizen-OS TVs with Ethernet or Wi-Fi connectivity (Python).
  * [samsung-tv-remote](https://github.com/Badisi/samsung-tv-remote) - Node.js module to remotely control Samsung Smart TV starting from 2016 (JavaScript).
  * [homebridge-samsungtv2016](https://github.com/kyleaa/homebridge-samsungtv2016) - Plugin for [Homebridge](https://github.com/nfarina/homebridge) that allows you to control your 2016 Samsung TV with HomeKit and Siri (JavaScript).

### LG webOS
* [Developers site](http://webostv.developer.lge.com) - Development principles, tutorials, API documentation and packaging tools for webOS TV apps.
* [webOS TV SDK](http://webostv.developer.lge.com/sdk/download/download-sdk/) - IDE for apps development including a Command Line Interface and emulator.
* Remote control libraries:
  * [Connect SDK](http://www.svlconnectsdk.com/) - Open source framework developed by LG that connects your mobile apps with multiple media device platforms. Currently supports 8 platforms. But seems [abandoned](https://github.com/ConnectSDK/Connect-SDK-Android/issues/364).
  * [lgtv2](https://github.com/hobbyquaker/lgtv2) - Node.js module for remote control of LG WebOS TV via WebSocket messages (JavaScript).
  * [node-red-contrib-lgtv](https://github.com/hobbyquaker/node-red-contrib-lgtv) - Module for [Node-RED](https://nodered.org) allowing  remote control of LG webOS Smart TVs (JavaScript).
  * [node-webos](https://github.com/WeeJeWel/node-webos) - Node.js module to discover and control webOS TVs (JavaScript).
  * [pylgtv](https://github.com/TheRealLink/pylgtv) - Library to control webOS based LG Tv devices (Python).
  * [LGWebOSRemote](https://github.com/klattimer/LGWebOSRemote) - Command line tool for webOS remote control of LG TVs (Python).

### Android TV
* [Android TV Developers site](https://developer.android.com/training/tv/start/start.html) - Official documentation, tutorials and best practises for building Android TV apps.

### Apple tvOS
* [tvOS Developers Site](https://developer.apple.com/tvos/) - Official SDK, documentation and tutorials for writing tvOS apps.

### Chromecast
* [Google Cast SDK](https://developers.google.com/cast/) - Official Google Cast SDK documentation and tutorials.
* [TVs with Chromecast built-in](https://www.google.com/chromecast/built-in/tv/) - List of vendors supporting built-in Chromecast and advantages over traditional TV remote controller.

## Frameworks
* [TOAST](http://developer.samsung.com/tv/develop/extension-libraries/toast/) - Samsung open-source framework for multi-platform TV apps developemnt.
* [Enyo](http://enyojs.com) - LG framework for development apps for all major platforms, from phones and tablets to PCs and TVs.
* [Smartbox](https://github.com/immosmart/smartbox) - Smart TV universal library for Samsung, LG, Philips, SmartTV Aliance, STB Mag app development.

## Tutorials
* [Creating a Samsung Tizen TV Web App](https://www.samsungdforum.com/TizenGuide/tizen1221/index.html)
* [Getting Started with a Samsung Smart TV](http://www.samsung.com/global/article/articleDetailView.do?atcl_id=61689)
* [Build Your First App for webOS TV](http://developer.lge.com/webOSTV/develop/web-app/getting-started/building-your-first-web-app-webos-tv/)

## Communication protocols
* [DLNA](https://en.wikipedia.org/wiki/Digital_Living_Network_Alliance) - Industry-wide standard for sharing data over a home network. Depending on the DLNA-compatible devices you own, you might be able to stream films from your laptop to your TV, play an MP3 stored on your phone over your hi-fi system, or print a photo from your tablet on your home printer.
* [DIAL](http://www.dial-multiscreen.org/) - Developed by Netflix and Google, this protocol alows client devices (like smartphone, tablet, or computer) to discover apps on server devices (like a smart TV or streaming box) and launch content on them.
* [Wi-Fi Direct](https://en.wikipedia.org/wiki/Wi-Fi_Direct) - Standard enabling devices to easily connect with each other without requiring a wireless access point.
* [Miracast](https://en.wikipedia.org/wiki/Miracast) - Standard for wireless connections from devices (such as laptops, tablets, or smartphones) to displays (such as TVs, monitors or projectors). Works over Wi-Fi Direct.

## Articles
* [What is DLNA?](http://www.which.co.uk/reviews/televisions/article/what-is-dlna)
* [Use DIAL to Cast Netflix and YouTube Without a Chromecast](http://www.howtogeek.com/215791/use-your-tv’s-hidden-“dial”-feature-to-cast-netflix-and-youtube-without-a-chromecast/)
* [LG WebOS communication](https://mym.hackpad.com/ep/pad/static/rLlshKkzdNj) - Unofficial but detailed description of communication with webOS TV.

## Videos
* [LG Magic Motion Remote - Point, Click, and Control](https://youtu.be/yxu0G7jM_us) - Operate TV like a computer mouse.

## Community
* [Samsung Smart TV Apps Developer Forum](https://www.samsungdforum.com/)
* [LG Smart TV Developer Forum](http://developer.lge.com/community/forums/RetrieveForumList.dev?prodTypeCode=TV)
* [Stack Overflow](http://stackoverflow.com/questions/tagged/smart-tv)
* [Reddit](https://www.reddit.com/r/smarttv)

## Contribute
Feel free to share your experience and contribute useful extension resources by creating [new issue](issues/new) or [pull request](compare).
Please read the [contribution guidelines](CONTRIBUTING.md) first. Thanks!

## License
[![CC0](http://mirrors.creativecommons.org/presskit/buttons/88x31/svg/cc-zero.svg)](https://creativecommons.org/publicdomain/zero/1.0/)
