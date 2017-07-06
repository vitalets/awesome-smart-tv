<p align="center"><img src="https://user-images.githubusercontent.com/1473072/27913047-7c3a5e60-6267-11e7-8bd1-bef2bf3cd753.png"/></p>

# Awesome Smart TV [![Awesome](https://cdn.rawgit.com/sindresorhus/awesome/d7305f38d29fed78fa85652e3a63e154dd8e8829/media/badge.svg)](https://github.com/sindresorhus/awesome)

> A curated list of awesome resources for building [Smart TV](https://en.wikipedia.org/wiki/Smart_TV) apps

## Contents
* [Platforms](#platforms)
  * [Samsung Tizen](#samsung-tizen)
  * [LG webOS](#lg-webos)
  * [Android TV](#android-tv)
  * Apple TV (todo)
  * [Chromecast](#chromecast)
* [Frameworks](#frameworks)
* [Tutorials](#tutorials)
* [Communication protocols](#communication-protocols)
* [Articles](#articles)
* [Videos](#articles) 
* [Community](#community)

## Platforms
There are several platforms for Smart TV apps. Full list is [here](https://en.wikipedia.org/wiki/List_of_smart_TV_platforms_and_middleware_software).

### Samsung Tizen
* [Tizen Developers site](https://developer.tizen.org/tizen/tv) - apps development principles, tutorials, API documentation and packaging tools for Tizen TV apps.
* [Tizen Studio](https://developer.tizen.org/development/tizen-studio/download) - IDE for apps development and Tizen TV Emulator.
* Remote control libraries:
  * [Samrt View SDK](http://developer.samsung.com/tv/develop/tools/extension-libraries/smart-view-sdk-download) - Android, IOS and JavaScript SDK for communication between TV and mobile device.
  * [samsungctl](https://github.com/Ape/samsungctl) - Remote control Samsung televisions via a TCP/IP connection (Python).
  * [samsung-tv-remote](https://github.com/Badisi/samsung-tv-remote) - NodeJS module to remotely control Samsung SmartTV starting from 2016 (JavaScript).
  * [homebridge-samsungtv2016](https://github.com/kyleaa/homebridge-samsungtv2016) - This allows you to control your 2016 Samsung TV with HomeKit and Siri (JavaScript).

### LG webOS
* [Developers site](http://webostv.developer.lge.com) - development principle, tutorials, API documentation and packaging tools for webOS TV apps.
* [webOS TV SDK](http://webostv.developer.lge.com/sdk/download/download-sdk/) - IDE for apps development including a Command Line Interface and emulator.
* Remote control libraries:
  * [Connect SDK](http://www.svlconnectsdk.com/) - open source framework developed by LG that connects your mobile apps with multiple media device platforms. Currently supports 8 platforms. Looks [abandoned](https://github.com/ConnectSDK/Connect-SDK-Android/issues/364).
  * [lgtv2](https://github.com/hobbyquaker/lgtv2) - Control LG WebOS TV using node.js (JavaScript).
  * [node-red-contrib-lgtv](https://github.com/hobbyquaker/node-red-contrib-lgtv) - Node-RED Nodes to control LG webOS Smart TVs (JavaScript).
  * [node-webos](https://github.com/WeeJeWel/node-webos) - webOS remote for LG TVs (JavaScript).
  * [pylgtv](https://github.com/TheRealLink/pylgtv) - Library to control webOS based LG Tv devices (Python).
  * [LGWebOSRemote](https://github.com/klattimer/LGWebOSRemote) - Command line webOS remote for LGTVs (Python).

### Android TV
* [Android TV Developers site](https://developer.android.com/training/tv/start/start.html) - Getting Started with TV Apps.

### Chromecast
* [Google Cast SDK](https://developers.google.com/cast/) - Get Started with Google Cast SDK.
* [TVs with Chromecast built-in](https://www.google.com/chromecast/built-in/tv/)

## Frameworks
* [TOAST](http://developer.samsung.com/tv/develop/extension-libraries/toast/) - Samsung open-source framework for multi-platform TV apps developemnt.
* [Enyo](http://enyojs.com) - LG framework for development apps for all major platforms, from phones and tablets to PCs and TVs.
* [Smartbox](https://github.com/immosmart/smartbox) - SmartTV universal library for Samsung, LG, Philips, SmartTV Aliance, STB Mag app development.

## Tutorials
* [Creating a Samsung Tizen TV Web App](https://www.samsungdforum.com/TizenGuide/tizen1221/index.html)
* [Getting Started with a Samsung Smart TV](http://www.samsung.com/global/article/articleDetailView.do?atcl_id=61689)
* [Build Your First App for webOS TV](http://developer.lge.com/webOSTV/develop/web-app/getting-started/building-your-first-web-app-webos-tv/)

## Communication protocols
* [DLNA](https://en.wikipedia.org/wiki/Digital_Living_Network_Alliance) - industry-wide standard for sharing data over a home network. Depending on the DLNA-compatible devices you own, you might be able to stream films from your laptop to your TV, play an MP3 stored on your phone over your hi-fi system, or print a photo from your tablet on your home printer.
* [DIAL](http://www.dial-multiscreen.org/) - developed by Netflix and Google, this protocol alows client devices (like smartphone, tablet, or computer) to discover apps on server devices (like a smart TV or streaming box) and launch content on them.
* [Wi-Fi Direct](https://en.wikipedia.org/wiki/Wi-Fi_Direct) - standard enabling devices to easily connect with each other without requiring a wireless access point.
* [Miracast](https://en.wikipedia.org/wiki/Miracast) - a standard for wireless connections from devices (such as laptops, tablets, or smartphones) to displays (such as TVs, monitors or projectors). Works over Wi-Fi Direct.

## Articles
* [What is DLNA?](http://www.which.co.uk/reviews/televisions/article/what-is-dlna)
* [Use DIAL to Cast Netflix and YouTube Without a Chromecast](http://www.howtogeek.com/215791/use-your-tv’s-hidden-“dial”-feature-to-cast-netflix-and-youtube-without-a-chromecast/)
* [LG WebOS communication](https://mym.hackpad.com/ep/pad/static/rLlshKkzdNj) - unofficial description of communication with webOS TV.

## Videos
* [LG Magic Motion Remote - Point, Click, and Control](https://youtu.be/yxu0G7jM_us) - operate TV like a computer mouse.

## Community
* [Reddit](https://www.reddit.com/r/smarttv)
* [Stack Overflow](http://stackoverflow.com/questions/tagged/smart-tv)
* [Samsung Smart TV Apps Developer Forum](https://www.samsungdforum.com/)
* [LG Smart TV Developer Forum](http://developer.lge.com/community/forums/RetrieveForumList.dev?prodTypeCode=TV)

## Contribute
Feel free to share your experience and contribute useful extension resources by creating [new issue](issues/new) or [pull request](compare).
Please read the [contribution guidelines](CONTRIBUTING.md) first. Thanks!

## License
[![CC0](http://mirrors.creativecommons.org/presskit/buttons/88x31/svg/cc-zero.svg)](https://creativecommons.org/publicdomain/zero/1.0/)
