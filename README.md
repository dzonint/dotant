# DotaNT
DotaNT is a simple Dota 2 match analyzer which uses OpenDota API via AJAX.

The app is hosted on https://dotant.herokuapp.com.

You can add parameters 'match' and 'profile' to the URL to instantly load requested resources e.g.
https://dotant.herokuapp.com/?profile=64836543&match=3363644373



## History

I remember seeing on [Dota 2 TI website](http://www.dota2.com/international/replays/?l=english) a feature where you could click on a scoreboard and it would pop up an image containing all the match details (click reveal all > scoreboard). I was thinking to myself that it was a pretty cool feature, and that I wanted to do some new project anyway, so I decided to try making some Dota 2 match analyzer site thing. I was struggling for a few days finding suitable framework to work with (wasn't really in a mood to start learning node.js and such), but then I saw OpenAI playing against Dota 2 player news article and read that they used [OpenDota API](https://docs.opendota.com/) to fetch all the replays AI used to learn and thought that that API was just the thing I needed which I can use with jQuery + AJAX calls.

The app is hosted on https://dotant.herokuapp.com. The app pretty much works by inserting AJAX request results into HTML tables via jQuery which then hide or show depending on the button pressed.

The app first displays the latest 20 matches user played and the user's hero stats. It also shows hero icons next to the user's name depending if the user fullfilled the following criteria :
```
/* Checking if the user has a great winrate with hero.
/*  Normal image :
/*  10 - 14 games played - 70% winrate (has to win 7 out of 9 / 10 out of 14 matches)
/*  15 - 24 games played - 66.66% winrate (has to win 10 out of 15 / 16 out of 24 matches)
/*  Burning image :
/*  25 - 39 games played - 63.33% winrate (has to win 16 out of 25 / 25 out of 39 matches)
/*  40 games and more played - 59.75%  winrate (has to win 24 out of 40 / 48 out of 80 / 60 out of 100 matches etc.) */
```

I tried to be as inclusive as possible, the images are supposed to be relative as in if you're 2k and have a burning image that doesn't mean you are 5k with that hero, it means that you could consider using that hero to climb the ladder since you have a significant winrate with him in your bracket.

Clicking on any of the match ids will generate a match details table. I expanded (photoshopped) original Valve match detail picture to include backpack items as well. 

Users can click on the button next to their name to show their full match history, which is a different call from recent matches and might take significantly longer (which is why I kept the two separated). The hero table is sortable (click on the headers with a lighter shade), and so are the match tables but they are bugged due to pagination (meaning it will only sort the current results it sees, and not the whole table). They can also click on the hero's name on hero table and the table with all the matches they played with that hero will be displayed.

There's a search bar in top right corner of navbar, where users can either search for a match based on match id (which will make match details table appear if the match is found), or they can search for profiles (searches based on id are instant and will show the user's profile, while searches based on profile name will generate a table with all profiles who have at least 70% similarity with the search term). There's also the recent matches button which will just generate a table with data from random 100 matches AJAX call returned.

## Images
<img src="https://dzonint.github.io/img/portfolio/dotant.png" width="300"></img>
