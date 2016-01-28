## A proxy for all the kitten banners you need.

Killing Floor 2 Dedicated Server allows the administrator to specify a URL to a PNG image to use as the banner on the welcome screen. Naturally, a zombie shooter game should have a cute cat image as its banner, kindly provided by [The Cat API](http://thecatapi.com/).

However, The Cat API responds with a HTTP redirect to the actual image file, and the Killing Floor 2 client doesn't follow redirects, so it can't be used straight out of the box. This is where the *kittenproxy* comes in. It acts as a stupid proxy that requests an image from The Cat API and serves it with a HTTP 200 header that KF2 can understand.

Moreover, it would be *more funneh* if every player logging into the server for the same game (roughly simultaneously) received the same cat image, so that its cuteness can be discussed in the lobby before entering the battleground to shoot zombies. For this reason, *kittenproxy* caches the cat image for five minutes before replacing it with a new one.
