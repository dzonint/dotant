<!doctype html>

<html>
	<head>
		<title>DotaNT</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <meta name="author" content="TDD - dzonint@yahoo.com">

<!-- NOTE : dota2_publicheader => http://cdn.dota2.com/apps/dota2/fonts/goudytrajan-regular-pro-webfont.svg gives 404 error. -->
<link rel="stylesheet" type="text/css" href="css/bootstrap_3.3.7_min.css">
<link rel="stylesheet" type="text/css" href="css/dota2_global.css">
<link rel="stylesheet" type="text/css" href="css/dota2_global_english.css">
<link rel="stylesheet" type="text/css" href="css/dota2_publicheader.css">
<link rel="stylesheet" type="text/css" href="css/dota2_jquery.tournamentschedule.css">
<link rel="stylesheet" type="text/css" href="css/profileTable.css">
<script src="script/jquery_3.2.1_min.js"></script>
<script src="script/bootstrap_3.3.7_min.js"></script>
<!-- Add class "sortable" to tables you want to be sortable, add class "sorttable_nosort" to columns you don't want to be sortable. -->
<script src="script/sorttable.js"></script>
	</head>

<body background="img/Background.png" style="background-size: cover; background-attachment: fixed; background-repeat: no-repeat;"> 
    <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">DotaNT</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="http://steamcommunity.com/profiles/76561198113652356/">Created by <strong>TDD</strong></a>.</li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
                <li><a href="#" class="SearchProfilesText" onclick="toggleSearch();"><small style="color:#959595">Search for profiles</small></a></li>
                <li><a href="#" class="SearchMatchesText" onclick="toggleSearch();"><small style="color:#959595">Search for matches</small></a></li>
              
                <li class="MatchSearch"><a><label style="color:#959595">Enter a match ID:</label></a></li>
                <li class="MatchSearch"><a><input type="text" name="matchSearchID" id="matchSearchID"/></a></li>
                <li class="MatchSearch"><a><input class="btn btn-success btn-sm" type="button" onclick="getMatch(1);" value="Search"></a></li>
                
                <li class="ProfileSearch"><a><label style="color:#959595">Enter a profile ID:</label></a></li>
                <li class="ProfileSearch"><a><input type="text" name="profileSearchID" id="profileSearchID"/></a></li>
                <li class="ProfileSearch"><a><input class="btn btn-success btn-sm" type="button" onclick="getProfile(1);" value="Search"></a></li>
          </ul>
        </div>
      </div>
    </nav>
    
        <!-- PROFILE DATA TABLE -->
<table id="ProfileDataTable" class="container">
   <thead>
    <!-- Avatar : 5%, Name : 20%, TBD: 23%, Matches: 30%, MMR: 22%. -->
      <tr style="background-color: #353943;">
         <th id="ProfileAvatar" style="width:5%;"></th>
         <th id="ProfileName" style="width:20%;"></th>
         <th style="width:23%;padding:0;">
            <ul style="list-style:none;">
                <li id="NotableHeroes"> 
                    <!--<small style="float:left;padding-bottom:2px;">Notable heroes</small>-->
                </li> 
               <li id="Hero0" style="float:left;margin-right: 20px;"></li>
               <li id="Prons" style="font-size:13.5pt;color:green; float:right;"></li>
               <li id="Proero1" style="clear:both; float:left;margin-right: 20px;"></li>
               <li id="ProLosses" style="font-size:13.5pt;color:red;float:right;"></li>
               <li id="Profro2" style="clear:both;float:left;margin-right: 20px;"></li>
               <li id="Proinrate" style="font-size:10pt;font-weight:bold;float:right;"></li>
            </ul>
          </th>
         <th style="width:30%;">
            <ul style="list-style: none;" class="pull-right"><!-- margin-top:21.2px;margin-left:1.5px; -->
                <li> 
                    <small style="float:left;padding-bottom:2px;">Most played heroes</small>
                    <small id="ProfileTotalMatches" style="float:right;padding-bottom:2px;"></small>
                </li> 
               <li id="ProfileHero0" style="float:left;margin-right: 20px;"></li>
               <li id="ProfileWins" style="font-size:13.5pt;color:green; float:right;"></li>
               <li id="ProfileHero1" style="clear:both; float:left;margin-right: 20px;"></li>
               <li id="ProfileLosses" style="font-size:13.5pt;color:red;float:right;"></li>
               <li id="ProfileHero2" style="clear:both;float:left;margin-right: 20px;"></li>
               <li id="ProfileWinrate" style="font-size:10pt;font-weight:bold;float:right;"></li>
            </ul>
         </th>
          <th style="padding:0;width:22%;">
            <ul style="list-style: none;">
               <li id="SoloMMR" style="display:inline-block;margin-right: 6px;"></li>
               <li id="PartyMMR" style="display:inline-block;margin-right: 6px;"></li>
               <li id="EstimatedMMR" style="display:inline-block;"></li>
            </ul>
         </th>
      </tr>
   </thead>
</table>
    
        <!-- PROFILE RECENT MATCHES TABLE -->
    <table id="ProfileRecentMatchesTable" class="container sortable">
        <thead>
            <tr style="background-color: #383c47" id="ProfileRecentMatchesHeader"> 
                <th style="font-size:16pt;font-weight: bold; text-align: center;" class="sorttable_nosort">Match ID</th>
                <th style="font-size:16pt;font-weight: bold; text-align: center; color:#d7cfe0;">Date</th>
                <th style="font-size:16pt;font-weight: bold; text-align: center;" class="sorttable_nosort">Match duration</th>
                <th style="font-size:16pt;font-weight: bold; text-align: center;" class="sorttable_nosort">Skill</th>
                <th style="font-size:16pt;font-weight: bold; text-align: center;" class="sorttable_nosort">Game mode</th>
                <th colspan="2" style="font-size:16pt;font-weight: bold; text-align: center;width:16%;">Hero</th>
                <th style="font-size:16pt;font-weight: bold; text-align: center;" class="sorttable_nosort">K/D/A</th>
                <th style="font-size:16pt;font-weight: bold; text-align: center;width:9%; color:#d7cfe0;">GPM</th>
                <th style="font-size:16pt;font-weight: bold; text-align: center;width:9%; color:#d7cfe0;">XPM</th>
                <th style="font-size:16pt;font-weight: bold; text-align: center;width:12%; color:#d7cfe0;">Outcome</th>
            </tr>
        </thead>
        <tbody id="ProfileMatches"></tbody>
    </table> 
    
        <!--  PROFILE HEROES TABLE -->
    <table id="ProfileHeroesTable" class="container sortable">
        <thead>
             <tr style="background-color: #383c47" id="ProfileHeroesHeader">
                <th colspan="3"style="font-size:18pt;font-weight: bold; text-align: center; color:#d7cfe0;">Hero</th>
                <th colspan="2" style="font-size:14pt;font-weight: bold; text-align: center;" class="sorttable_nosort">Last played</th>
                <th style="font-size:14pt;font-weight: bold; text-align: center; color:#d7cfe0;">Matches played</th>
                <th style="font-size:14pt;font-weight: bold; text-align: center;" class="sorttable_nosort">Wins/Losses</th>
                <th style="font-size:14pt;font-weight: bold; text-align: center; color:#d7cfe0;">Winrate</th>
                <th style="font-size:14pt;font-weight: bold; text-align: center;" class="sorttable_nosort">Times encountered</th>
                <th style="font-size:14pt;font-weight: bold; text-align: center; color:#d7cfe0;">WR with</th>
                <th style="font-size:14pt;font-weight: bold; text-align: center; color:#d7cfe0;">WR against</th>
            </tr>
        </thead>
        <tbody id="ProfileHeroes"></tbody>
    </table>

        
        
        
        <!-- MATCH TABLE -->
        <div id="popup_match_details" class="modal fade" role="dialog">
        <div id="MatchDetails" style="display: block;">
<button type="button" class="close" data-dismiss="modal"><img id="close_details_button" src="http://cdn.dota2.com/apps/dota2/images/international2017/overview/close_details_button.png"></button>
        <div id="MatchID" class="OptimizeTextRadiance"></div>
        <div id="MatchDuration" class="OptimizeTextRadiance"></div>
        <div id="MatchDate" class="OptimizeTextRadiance"></div>
        <div id="RadiantTeamName" class="OptimizeTextRadiance">Radiant</div>
        <div id="DireTeamName" class="OptimizeTextRadiance">Dire</div>
        <div id="WinnerTeamName" class="OptimizeTextRadiance">Enter your match ID</div>
        <div id="DetailsTable">
            <div class="DetailsTableRow">
                <div class="DetailsTableCellPlayer" id="Player0"></div>
                <div class="DetailsTableCellLevel" id="PlayerLevel0"></div>
                <div class="DetailsTableCellHero" id="PlayerHero0"></div>
                <div class="DetailsTableCellKDA" id="PlayerKDA0"></div>
                <div class="DetailsTableCellItems" id="PlayerItems0"></div>
                <div class="DetailsTableCellGold" id="PlayerGold0"></div>
                <div class="DetailsTableCellLastHits" id="PlayerLastHits0"></div>
                <div class="DetailsTableCellDenies" id="PlayerDenies0"></div>
                <div class="DetailsTableCellGoldMin" id="PlayerGPM0"></div>
                <div class="DetailsTableCellXPMin" id="PlayerXPM0"></div>
            </div>
            <div class="DetailsTableRow">
                <div class="DetailsTableCellPlayer" id="Player1"></div>
                <div class="DetailsTableCellLevel" id="PlayerLevel1"></div>
                <div class="DetailsTableCellHero" id="PlayerHero1"></div>
                <div class="DetailsTableCellKDA" id="PlayerKDA1"></div>
                <div class="DetailsTableCellItems" id="PlayerItems1"></div>
                <div class="DetailsTableCellGold" id="PlayerGold1"></div>
                <div class="DetailsTableCellLastHits" id="PlayerLastHits1"></div>
                <div class="DetailsTableCellDenies" id="PlayerDenies1"></div>
                <div class="DetailsTableCellGoldMin" id="PlayerGPM1"></div>
                <div class="DetailsTableCellXPMin" id="PlayerXPM1"></div>
            </div>
            <div class="DetailsTableRow">
                <div class="DetailsTableCellPlayer" id="Player2"></div>
                <div class="DetailsTableCellLevel" id="PlayerLevel2"></div>
                <div class="DetailsTableCellHero" id="PlayerHero2"></div>
                <div class="DetailsTableCellKDA" id="PlayerKDA2"></div>
                <div class="DetailsTableCellItems" id="PlayerItems2"></div>
                <div class="DetailsTableCellGold" id="PlayerGold2"></div>
                <div class="DetailsTableCellLastHits" id="PlayerLastHits2"></div>
                <div class="DetailsTableCellDenies" id="PlayerDenies2"></div>
                <div class="DetailsTableCellGoldMin" id="PlayerGPM2"></div>
                <div class="DetailsTableCellXPMin" id="PlayerXPM2"></div>
            </div>
            <div class="DetailsTableRow">
                <div class="DetailsTableCellPlayer" id="Player3"></div>
                <div class="DetailsTableCellLevel" id="PlayerLevel3"></div>
                <div class="DetailsTableCellHero" id="PlayerHero3"></div>
                <div class="DetailsTableCellKDA" id="PlayerKDA3"></div>
                <div class="DetailsTableCellItems" id="PlayerItems3"></div>
                <div class="DetailsTableCellGold" id="PlayerGold3"></div>
                <div class="DetailsTableCellLastHits" id="PlayerLastHits3"></div>
                <div class="DetailsTableCellDenies" id="PlayerDenies3"></div>
                <div class="DetailsTableCellGoldMin" id="PlayerGPM3"></div>
                <div class="DetailsTableCellXPMin" id="PlayerXPM3"></div>
            </div>
            <div class="DetailsTableRow">
                <div class="DetailsTableCellPlayer" id="Player4"></div>
                <div class="DetailsTableCellLevel" id="PlayerLevel4"></div>
                <div class="DetailsTableCellHero" id="PlayerHero4"></div>
                <div class="DetailsTableCellKDA" id="PlayerKDA4"></div>
                <div class="DetailsTableCellItems" id="PlayerItems4"></div>
                <div class="DetailsTableCellGold" id="PlayerGold4"></div>
                <div class="DetailsTableCellLastHits" id="PlayerLastHits4"></div>
                <div class="DetailsTableCellDenies" id="PlayerDenies4"></div>
                <div class="DetailsTableCellGoldMin" id="PlayerGPM4"></div>
                <div class="DetailsTableCellXPMin" id="PlayerXPM4"></div>
            </div>
        </div>
        <div id="DetailsTableBot">
            <div class="DetailsTableRow">
                <div class="DetailsTableCellPlayer" id="Player5"></div>
                <div class="DetailsTableCellLevel" id="PlayerLevel5"></div>
                <div class="DetailsTableCellHero" id="PlayerHero5"></div>
                <div class="DetailsTableCellKDA" id="PlayerKDA5"></div>
                <div class="DetailsTableCellItems" id="PlayerItems5"></div>
                <div class="DetailsTableCellGold" id="PlayerGold5"></div>
                <div class="DetailsTableCellLastHits" id="PlayerLastHits5"></div>
                <div class="DetailsTableCellDenies" id="PlayerDenies5"></div>
                <div class="DetailsTableCellGoldMin" id="PlayerGPM5"></div>
                <div class="DetailsTableCellXPMin" id="PlayerXPM5"></div>
            </div>
            <div class="DetailsTableRow">
                <div class="DetailsTableCellPlayer" id="Player6"></div>
                <div class="DetailsTableCellLevel" id="PlayerLevel6"></div>
                <div class="DetailsTableCellHero" id="PlayerHero6"></div>
                <div class="DetailsTableCellKDA" id="PlayerKDA6"></div>
                <div class="DetailsTableCellItems" id="PlayerItems6"></div>
                <div class="DetailsTableCellGold" id="PlayerGold6"></div>
                <div class="DetailsTableCellLastHits" id="PlayerLastHits6"></div>
                <div class="DetailsTableCellDenies" id="PlayerDenies6"></div>
                <div class="DetailsTableCellGoldMin" id="PlayerGPM6"></div>
                <div class="DetailsTableCellXPMin" id="PlayerXPM6"></div>
            </div>
            <div class="DetailsTableRow">
                <div class="DetailsTableCellPlayer" id="Player7"></div>
                <div class="DetailsTableCellLevel" id="PlayerLevel7"></div>
                <div class="DetailsTableCellHero" id="PlayerHero7"></div>
                <div class="DetailsTableCellKDA" id="PlayerKDA7"></div>
                <div class="DetailsTableCellItems" id="PlayerItems7"></div>
                <div class="DetailsTableCellGold" id="PlayerGold7"></div>
                <div class="DetailsTableCellLastHits" id="PlayerLastHits7"></div>
                <div class="DetailsTableCellDenies" id="PlayerDenies7"></div>
                <div class="DetailsTableCellGoldMin" id="PlayerGPM7"></div>
                <div class="DetailsTableCellXPMin" id="PlayerXPM7"></div>
            </div>
            <div class="DetailsTableRow">
                <div class="DetailsTableCellPlayer" id="Player8"></div>
                <div class="DetailsTableCellLevel" id="PlayerLevel8"></div>
                <div class="DetailsTableCellHero" id="PlayerHero8"></div>
                <div class="DetailsTableCellKDA" id="PlayerKDA8"></div>
                <div class="DetailsTableCellItems" id="PlayerItems8"></div>
                <div class="DetailsTableCellGold" id="PlayerGold8"></div>
                <div class="DetailsTableCellLastHits" id="PlayerLastHits8"></div>
                <div class="DetailsTableCellDenies" id="PlayerDenies8"></div>
                <div class="DetailsTableCellGoldMin" id="PlayerGPM8"></div>
                <div class="DetailsTableCellXPMin" id="PlayerXPM8"></div>
            </div>
            <div class="DetailsTableRow">
                <div class="DetailsTableCellPlayer" id="Player9"></div>
                <div class="DetailsTableCellLevel" id="PlayerLevel9"></div>
                <div class="DetailsTableCellHero" id="PlayerHero9"></div>
                <div class="DetailsTableCellKDA" id="PlayerKDA9"></div>
                <div class="DetailsTableCellItems" id="PlayerItems9"></div>
                <div class="DetailsTableCellGold" id="PlayerGold9"></div>
                <div class="DetailsTableCellLastHits" id="PlayerLastHits9"></div>
                <div class="DetailsTableCellDenies" id="PlayerDenies9"></div>
                <div class="DetailsTableCellGoldMin" id="PlayerGPM9"></div>
                <div class="DetailsTableCellXPMin" id="PlayerXPM9"></div>
            </div>
        </div>
        <!-- <button type="button" onclick="makeSnapshot();" style="margin-top: 6cm;margin-left: 22cm; background-color: #337ab7"> Make a screenshot </button> -->
    </div>
</div>
	</body>
    
    <!-- JSON DATA -->
    <script src="data.js"></script>

    <script>
        $(function(){ 
                    $('.ProfileSearch').toggle();
                    $('.SearchMatchesText').toggle();
                    $("#ProfileRecentMatchesTable").hide();
                    $("#ProfileHeroesTable").hide();
                    $("#ProfileDataTable").hide();
            
                    <?php if(isset($_REQUEST['profile'])){
                        // If we get 64bit ID in the URL, we will convert here instead of using AJAX in the getProfile function.
                        if(strlen((string) $_REQUEST['profile']) === 17)
                           $profil = substr($_REQUEST['profile'], 3) - 61197960265728;
                        else 
                            $profil = $_REQUEST['profile'];
                            ?> 
                        getProfile(<?= $profil ?>);
                    <?php } ?>
            
                    <?php if(isset($_REQUEST['match'])){ ?>
                        getMatch(<?= $_REQUEST['match'] ?>);
                    <?php } ?>
            });
        
        function toggleSearch(){
            $('.MatchSearch').toggle();
            $('.ProfileSearch').toggle();
            
            $('.SearchProfilesText').toggle();
            $('.SearchMatchesText').toggle();
            
            $('#matchSearchID').val('');
            $('#profileSearchID').val('');
        }
          
        function getMatch(match){
            if(match == 1)
                var match = $("#matchSearchID").val();
            // Emptying out the table
            for(var i=0;i<10;i++){
                $("#Player"+i).html('');
                $("#PlayerLevel"+i).html('');
                $("#PlayerHero"+i).html('');
                $("#PlayerKDA"+i).html('');
                $("#PlayerGold"+i).html('');
                $("#PlayerLastHits"+i).html('');
                $("#PlayerDenies"+i).html('');
                $("#PlayerGPM"+i).html('');
                $("#PlayerXPM"+i).html('');
                $("#PlayerItems"+i).html('');
            }
            
            $.ajax({ // AJAX for match data. 
                url: 'https://api.opendota.com/api/matches/'+match,
                success: function(response){
                    var legitGameModes = [1,2,3,4,5,8,12,13,14,16,17,18,22];
                    if(legitGameModes.indexOf(response.game_mode) == -1){
                        alert('This match is some event game mode or non 5 v 5 gamemode, thus it won\'t look good in table.');
                    }
                    if(response.radiant_win == true){
                        $("#WinnerTeamName").html('Winner: Radiant');
                    }else{
                        $("#WinnerTeamName").html('Winner: Dire');
                    }
                    var match = response;
                    // Inside the match is an array of arrays 'players' which contains the necessary data.
                    $("#MatchID").html(match.match_id);
                    $("#MatchDuration").html(Math.floor(match.duration / 60) + ':' + Math.floor(match.duration % 60));
                    var MatchDate = new Date(match.start_time * 1000);
                    $("#MatchDate").html(MatchDate.toString().substring(0,24));
        
                     $.each(match.players, function(i, player) {
                        $("#PlayerItems"+i).html('');
                         $.each(heroes, function(j, heroes){
                                if(player.hero_id == heroes.id){
                                    naziv = heroes.name.substr(14);
                                    // Table.
                                    if(player.personaname != null){
                                        $("#Player"+i).html('<a href="?profile='+player.account_id+'">'+player.personaname+'</a>')
                                    }
                                    else 
                                        $("#Player"+i).html("Anonymous");
                                    
                                    $("#PlayerLevel"+i).html(player.level);
                                    $("#PlayerHero"+i).html('<img src="http://cdn.dota2.com/apps/dota2/images/heroes/' + naziv +'_eg.png" style="margin-right: 3px;">' + heroes.localized_name);
                                    $("#PlayerKDA"+i).html(player.kills + '/' + player.deaths + '/' + player.assists);
                                    $("#PlayerGold"+i).html(player.gold);
                                    $("#PlayerLastHits"+i).html(player.last_hits);
                                    $("#PlayerDenies"+i).html(player.denies);
                                    $("#PlayerGPM"+i).html(player.gold_per_min);
                                    $("#PlayerXPM"+i).html(player.xp_per_min);
                                }
                            });
                                    // Items inside table.
                         $.each(items.result.items, function(n, items){
                                if([player.item_0, player.item_1, player.item_2, player.item_3, player.item_4, player.item_5].indexOf(items.id) > -1){
                                    // Cutting out item_ part of the string.
                                    var naziv = items.name.substring(5);
                                    $("#PlayerItems"+i).append('<img src="http://cdn.dota2.com/apps/dota2/images/items/'+naziv+'_eg.png" title="'+naziv+'">');
                                }
                            });    
                         
                    });
                     // We give it 1ms so it can generate the data without users seeing it happen.
                    setTimeout(function (){$('#popup_match_details').modal('show');}, 1);
                },
                error: function(){
                    alert('Match not found.');
                }
            });    
        } 
        
        function getProfile(profile){
            // Emptying out the match detail table.
            for(var i=0;i<10;i++){
                $("#Player"+i).html('');
                $("#PlayerLevel"+i).html('');
                $("#PlayerHero"+i).html('');
                $("#PlayerKDA"+i).html('');
                $("#PlayerGold"+i).html('');
                $("#PlayerLastHits"+i).html('');
                $("#PlayerDenies"+i).html('');
                $("#PlayerGPM"+i).html('');
                $("#PlayerXPM"+i).html('');
                $("#PlayerItems"+i).html('');
            }
            
            // Empty out notable heroes.
            $("#NotableHeroes").html('');
            
            // Emptying out the recent matches and heroes.
            $("#ProfileRecentMatchesTable tbody").empty();
            $("#ProfileHeroesTable tbody").empty();
            $("#ProfileRecentMatchesTable").fadeOut();
            $("#ProfileHeroesTable").fadeOut();
            $("#ProfileDataTable").fadeOut();
            if(profile == 1) // Means it's sent from the search button and not the URL.
                 profile = $("#profileSearchID").val();
            if(profile.length > 10){ // Making sure given profile ID is 32 bit since that is what API uses. 
                $.ajax({ // AJAX profile ID conversion.
                    url: 'ProfileIDFunction.php',
                    async: false, // Wait for it to get the value before proceeding.
                    data: 'id64=' + profile,
                    success: function(res){
                        profile = res; 
                    }
                });
            }  
             // AJAX for profile information. 
            $.ajax({ 
                url: 'https://api.opendota.com/api/players/'+profile,
                async: true,
                success: function(response){
                    // Invalid profiles will provide this output: {"tracked_until":null,"solo_competitive_rank":null,"competitive_rank":null}
                    // Thus, we check if there are 3 elements inside the object.
                    var elementCount = 0;
                    $.each(response, function(a, resp){
                        elementCount++;
                    });
                    if(elementCount == 3){
                        alert('Profile not found (or the user does not play Dota).');
                        return;
                    }

                    // If it passed the check, then it means that the profile was found and we can get the necessary information.
                    $("#ProfileAvatar").html('<img style=\"height: 96px;width: auto;\" src="' + response.profile.avatarmedium + '">');
                    $("#ProfileName").html('<h1 style=\"font-size: 16pt;margin-top:0!important;\"><a href="'+response.profile.profileurl+'">'+ response.profile.personaname +'</a></h1><a href="#" id="showMatches" onclick="showMatches();"><small> Matches </small></a><a href="#" id="showHeroes" onclick="showHeroes();"><small> Heroes</small></a>');
                    if(response.solo_competitive_rank != null){ // Sometimes people have solo but not party MMR.
                        $("#SoloMMR").html('<h1>Solo MMR<br><strong style=\"color:#a29ca9;\">'+response.solo_competitive_rank+'</strong></h1>');
                        if(response.competitive_rank != null)
                            $("#PartyMMR").html('<h1>Party MMR<br><strong style=\"color:#a29ca9;\">'+response.competitive_rank+'</strong></h1>');
                        else 
                            $("#PartyMMR").html('<h1>Party MMR<br><strong style=\"color:#a29ca9;\">N/A</strong></h1>');
                    } else {
                        $("#SoloMMR").html('<h1>Solo MMR<br><strong style=\"color:#a29ca9;\">N/A</strong></h1>');
                        $("#PartyMMR").html('<h1>Party MMR<br><strong style=\"color:#a29ca9;\">N/A</strong></h1>');
                    }
                    
                    if(response.mmr_estimate.estimate != null){
                    $("#EstimatedMMR").html('<h1>Est. MMR<br><strong style=\"color:#a29ca9;\">'+response.mmr_estimate.estimate+'</strong></h1>');
                    } else {
                        $("#EstimatedMMR").html('<h1>Estimated MMR<br><strong style=\"color:#a29ca9;\">N/A</strong></h1>');
                    }
                    
                 // AJAX for winrate.
                        $.ajax({
                            url: 'https://api.opendota.com/api/players/'+profile+'/wl',
                            async: true,
                            success: function(response){
                                $("#ProfileTotalMatches").html('<strong style="color:#F8F8F8;">'+(response.win+response.lose)+'</strong> matches')
                                $("#ProfileWins").html(response.win + ' Wins');
                                $("#ProfileLosses").html(response.lose + ' Losses');
                                $('#ProfileWinrate').html((response.win/(response.win+response.lose) * 100).toFixed(2) + '% Winrate');
                            }
                        });
            
                // AJAX for heroes.
                        $.ajax({
                            url: 'https://api.opendota.com/api/players/'+profile+'/heroes',
                            async: true,
                            success: function(response){
                                // Top 3 most played heroes. OpenDota sorts the results by the number of games played with hero, so we just take the first 3 results.
                                for(var num = 0; num < 3; num++){
                                    // Finding appropriate hero image.
                                    $.each(heroes, function(numa, heroes){
                                        if(response[num].hero_id == heroes.id)
                                            heroImage = '<img src="http://cdn.dota2.com/apps/dota2/images/heroes/' + heroes.name.substr(14) + '_eg.png" alt="' + heroes.localized_name + '" style="margin-right: 3px;">';
                                    });
                                    
                                    // Populating the hero fields.
                                    $("#ProfileHero"+num).html(
                                        heroImage + 
                                        '<span style="color:green;">' + response[num].win + 
                                        '</span> - <span style="color:red;">' + (response[num].games - response[num].win) + 
                                        '</span> : <span style="color:DodgerBlue;"> ' + ((response[num].win/response[num].games) * 100).toFixed(2) + '% </span>'
                                    );                                
                                }
        
                                // Filling out the hero table.
                                $.each(response, function(i, heroDetail){
                                    // Getting hero name and image. 
                                    $.each(heroes, function(numa, heroes){
                                        if(heroDetail.hero_id == heroes.id)
                                            heroData = '<img src="http://cdn.dota2.com/apps/dota2/images/heroes/' + heroes.name.substr(14) + '_sb.png" style="margin-right: 15px;">'+'<strong style="text-align:center">'+heroes.localized_name+'</strong></td>';
                                    });
                                    
                                    var LastPlayedDate = new Date(heroDetail.last_played * 1000);
                                    if(heroDetail.games != 0)
                                        winrateSpan = '<td style="text-align: center;">'+'<span style="color:DodgerBlue;">' + ((heroDetail.win/heroDetail.games) * 100).toFixed(2) + '% </span>'+'</td>'
                                    else
                                        winrateSpan = '<td style="text-align: center;">'+'<span style="color:Grey;"> Never played </span>'+'</td>'
                                    $("#ProfileHeroes").append(
                                        '<tr>'
                                        +'<td colspan="3" style="text-align: left;">'+heroData+'</td>'
                                        +'<td colspan="2" style="text-align: center;">'+LastPlayedDate.toString().substring(4,16)+'</td>'
                                        +'<td style="text-align: center;">'+'<strong>'+heroDetail.games+'</strong>'+'</td>'
                                        +'<td style="text-align: center;">'+'<span style="color:green;">'+heroDetail.win+'</span>'+' / '+'<span style="color:red;">'+(heroDetail.games - heroDetail.win)+'</span>'+'</td>'
                                        +winrateSpan
                                        +'<td style="text-align: center;">'+'<span style="color:green;">'+heroDetail.with_games+' ally </span>'+' / '+'<span style="color:red;">'+heroDetail.against_games+' enemy</span>'+'</td>'
                                        +'<td style="text-align: center;">'+((heroDetail.with_win/heroDetail.with_games)*100).toFixed(2)+'%</td>'
                                        +'<td style="text-align: center;">'+((heroDetail.against_win/heroDetail.against_games)*100).toFixed(2)+'%</td>'
                                        +'</tr>');
                                    
                                        /* Checking if the user has a great winrate with hero.
                                        /*  Normal image :
                                        /*  10 - 14 games played - 70% winrate (has to win 7 out of 9 / 10 out of 14 matches)
                                        /*  15 - 24 games played - 66.66% winrate (has to win 10 out of 15 / 16 out of 24 matches)
                                        /*  Burning image :
                                        /*  25 - 39 games played - 63.33% winrate (has to win 16 out of 25 / 25 out of 39 matches)
                                        /*  40 games and more played - 59.75%  winrate (has to win 24 out of 40 / 48 out of 80 / 60 out of 100 matches) */
                                        conditionFullfilled = 0;
                                        WR = ((heroDetail.win/heroDetail.games) * 100).toFixed(2);
                                        // Normal image.
                                        if((heroDetail.games >= 10 && heroDetail.games < 15 && WR >= 70) || (heroDetail.games >= 15 && heroDetail.games < 25 && WR >= 66.65)){
                                            conditionFullfilled = 1;
                                            imgURL = '<img src="img/miniheroes/'; 
                                            imgExtension = '.png';
                                            imgStyle = 'display:inline;margin-top:30px;'
                                        }
                                                
                                        // Burning image.    
                                        if((heroDetail.games >= 25 && heroDetail.games < 39 && WR >= 63.32) || (heroDetail.games >= 40 && WR >= 59.75)){
                                            conditionFullfilled = 1;
                                            imgURL = '<img src="img/miniheroes_animated/flame/'; 
                                            imgExtension = '.gif';
                                            imgStyle = 'display:inline;';
                                        } 
                                        
                                        if(conditionFullfilled == 1){
                                        // Search for localized name.
                                        $.each(heroes, function(numa, heroes){
                                            if(heroDetail.hero_id == heroes.id)
                                                $("#NotableHeroes").append(imgURL+ heroes.name.substr(14) +imgExtension+'" style="'+imgStyle+'" title="'+WR+'% winrate ('+heroDetail.win+' wins) in '+heroDetail.games+' matches as '+heroes.localized_name+'">');
                                        });
                                        conditionFullfilled = 0;
                                        }
                                });
                            }
                        });
                   
                // AJAX for recent matches.
                    $.ajax({
                        url: 'https://api.opendota.com/api/players/'+profile+'/recentMatches',
                        async: false,
                        success: function(response){  
                            $.each(response, function(i, match){ 
                                   // Finding out game mode. 
                                    $.each(game_modes, function(j, game_mode){
                                        if(match.game_mode == game_mode.id){
                                            gameMode = game_mode.name;
                                    // Apparantelly, OpenDota API specifies both normal and ranked all pick games with id of 22.
                                    // Thus, we have to differentiate them by lobby_type. lobby_type 7 is ranked matchmaking.
                                            if(match.game_mode == 22 && match.lobby_type != 7){
                                                var temp = 'A'+game_mode.name.toString().substring(8);
                                                gameMode = temp;
                                            }
                                        }
                                    });
                                
                                    // Finding out skill level.
                                    $.each(skill_level, function(k, skill_level){
                                        if(match.skill == skill_level.id)
                                            skillLevel = skill_level.name; 
                                    });
                                
                                    // Finding out hero.
                                    $.each(heroes, function(n, heroes){
                                        if(match.hero_id == heroes.id)
                                            hero = '<img src="http://cdn.dota2.com/apps/dota2/images/heroes/' + heroes.name.substr(14) +'_eg.png" style="margin-left: 20px;margin-right: 3px;">' + heroes.localized_name;
                                    });
                                
                                    // Finding out if player won. Dire slots have first bit set to 1, meaning their numeric value is above 128.
                                    if((match.player_slot >= 128 && match.radiant_win == false) || (match.player_slot < 5 && match.radiant_win == true))
                                        outcome = '<strong style="color:green;">Win</strong>';
                                    else 
                                        outcome = '<strong style="color:red;">Loss</strong>';
                                var MatchDate = new Date(match.start_time * 1000);
                                $("#ProfileMatches").append(
                                '<tr>'
                                +'<td style="text-align: center;"><a href="#" style=\"font-size: 120%;\" onclick=getMatch('+match.match_id+');>' + match.match_id + '</a></td>'    
                                +'<td style="text-align: center;">' + MatchDate.toString().substring(4,24) + '</td>'
                                +'<td style="text-align: center;">' + Math.floor(match.duration / 60) + ':' + Math.floor(match.duration % 60) + '</td>'
                                +'<td style="text-align: center;">' + skillLevel + '</td>' 
                                +'<td style="text-align: center;">' + gameMode + '</td>' 
                                +'<td colspan="2" style="padding-left:10px;">' + hero + '</td>' 
                                +'<td style="text-align: center;">' + match.kills + '/' + match.deaths + '/' + match.assists + '</td>'
                                +'<td style="text-align: center;">' + match.gold_per_min + '</td>'
                                +'<td style="text-align: center;">' + match.xp_per_min + '</td>'
                                +'<td style="text-align: center;">' + outcome + '</td>' // TO-DO
                                +'</tr>'
                                ); 
                            });
                        } 
                    });
                     
                    $("#showMatches").css('background-color','#3c414c');
                    $("#ProfileDataTable").fadeIn();
                    $("#ProfileRecentMatchesTable").fadeIn();
                    var newTableObject = document.getElementById('ProfileRecentMatchesTable');
                    // Need to do it twice for some reason.
                    sorttable.makeSortable(newTableObject); 
                    sorttable.makeSortable(newTableObject); 
                }
            });  
        }
        
        function showMatches(){
            $("#showHeroes").css("background-color", ""); 
            $("#showMatches").css('background-color','#3c414c');
            $("#ProfileHeroesTable").fadeOut();
            $("#ProfileRecentMatchesTable").fadeIn();
        }
        
        function showHeroes(){
            $("#showMatches").css("background-color", ""); 
            $("#showHeroes").css('background-color','#3c414c');
            $("#ProfileRecentMatchesTable").fadeOut();
            var newTableObject = document.getElementById('ProfileHeroesTable');
            sorttable.makeSortable(newTableObject); 
            sorttable.makeSortable(newTableObject);
            $("#ProfileHeroesTable").fadeIn();
        }
    </script>
</html>
