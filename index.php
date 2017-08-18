<!doctype html>

<html>
	<head>
		<title>Dota 2 match analyzer by NV</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">

<link href="http://www.dota2.com/public/css/global.css" rel="stylesheet" type="text/css" >
<link href="http://www.dota2.com/public/css/global_english.css" rel="stylesheet" type="text/css" >
<link href="http://www.dota2.com/public/css/publicheader.css" rel="stylesheet" type="text/css" >
<link href="http://www.dota2.com/public/css/jquery.tournamentschedule.css" rel="stylesheet" type="text/css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
<link rel="stylesheet" type="text/css" href="profileTable.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- To make it so that clicked links do not become grey. -->
<style>a:visited { color: #337ab7!important; }</style>
	</head>

	<body background="Background.png" style="background-size: cover; background-attachment: fixed; background-repeat: no-repeat;"> 
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
                <li><a href="#" class="SearchProfilesText" onclick="toggleSearch();"><small>Search for profiles</small></a></li>
                <li><a href="#" class="SearchMatchesText" onclick="toggleSearch();"><small>Search for matches</small></a></li>
              
                <li class="MatchSearch"><a><label>Enter a match ID:</label></a></li>
                <li class="MatchSearch"><a><input type="text" name="matchSearchID" id="matchSearchID"/></a></li>
                <li class="MatchSearch"><a><input class="btn btn-success btn-sm" type="button" onclick="getMatch(1);" value="Search"></a></li>
                
                <li class="ProfileSearch"><a><label>Enter a profile ID:</label></a></li>
                <li class="ProfileSearch"><a><input type="text" name="profileSearchID" id="profileSearchID"/></a></li>
                <li class="ProfileSearch"><a><input class="btn btn-success btn-sm" type="button" onclick="getProfile(1);" value="Search"></a></li>
          </ul>
        </div>
      </div>
    </nav>
        <!-- PROFILE TABLE -->
        <table id="ProfileTable" class="container hidden">
	<thead>
        <tr>
			<th id="ProfileAvatar"></th>
			<th colspan="2" id="ProfileName">
                <p style="text-align:left">No profile loaded - make sure you've entered the correct Steam ID or try again in few seconds.</p>
            </th>
            <th></th>
			<th colspan="4" style="text-align:right;margin-right: 10px;">
                <br>
                <ul style="list-style: none;">
                    <li id="ProfileWins" style="font-size:13.5pt;color:green;"></li>
                    <li id="ProfileLosses" style="font-size:13.5pt;color:red;"></li>
                    <li id="ProfileWinrate" style="font-size:10pt;font-weight:bold;"></li>
                </ul>
            </th>
            <th id="SoloMMR"></th>
            <th id="PartyMMR"></th>
            <th id="EstimatedMMR"></th>
            
		</tr>
		<tr>
			<th style="font-size:16pt;font-weight: bold; text-align: center;">Match ID</th>
            <th style="font-size:16pt;font-weight: bold; text-align: center;">Date</th>
            <th style="font-size:16pt;font-weight: bold; text-align: center;">Match duration</th>
            <th style="font-size:16pt;font-weight: bold; text-align: center;">Skill</th>
            <th style="font-size:16pt;font-weight: bold; text-align: center;">Game mode</th>
            <th colspan="2" style="font-size:16pt;font-weight: bold; text-align: center;">Hero</th>
			<th style="font-size:16pt;font-weight: bold; text-align: center;">K/D/A</th>
            <th style="font-size:16pt;font-weight: bold; text-align: center;">GPM</th>
            <th style="font-size:16pt;font-weight: bold; text-align: center;">XPM</th>
            <th style="font-size:16pt;font-weight: bold; text-align: center;">Outcome</th>
		</tr>
	</thead>
	<tbody id="ProfileMatches">
	</tbody>
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
                                        // AJAX for profile ID conversion.
                                       /* $.ajax({
                                            url: 'ProfileIDFunction.php',
                                            data: 'id32='+player.account_id,
                                            success: function(res) {
                                                // $("#Player"+i).html('<a href="http://steamcommunity.com/profiles/'+res+'/">'+player.personaname+'</a>');
                                                $("#Player"+i).html('<a href="index.php?profile='+res+'">'+player.personaname+'</a>')
                                            }
                                        });*/
                                        $("#Player"+i).html('<a href="index.php?profile='+player.account_id+'">'+player.personaname+'</a>')
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
            $("#ProfileTable").removeClass('hidden');
            $("#ProfileTable").fadeOut(); 
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
                async: false,
                success: function(response){
                    // Invalid profiles will provide this output: {"tracked_until":null,"solo_competitive_rank":null,"competitive_rank":null}
                    // Thus, we check if there are 3 elements inside the object.
                    var elementCount = 0;
                    $.each(response, function(a, resp){
                        elementCount++;
                    });
                    if(elementCount == 3){
                        alert('Profile not found.');
                        return;
                    }
                    
                    // If it passed the check, then it means that the profile was found and we can get the necessary information.
                    $("#ProfileAvatar").html('<img style=\"height: 96px;width: auto;\" src="' + response.profile.avatarmedium + '">');
                    $("#ProfileName").html('<h1 style=\"font-size: 200%;\"><a href="'+response.profile.profileurl+'">'+ response.profile.personaname +'</a></h1>');
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
                    $("#EstimatedMMR").html('<h1>Estimated MMR<br><strong style=\"color:#a29ca9;\">'+response.mmr_estimate.estimate+'</strong></h1>');
                    } else {
                        $("#EstimatedMMR").html('<h1>Estimated MMR<br><strong style=\"color:#a29ca9;\">N/A</strong></h1>');
                    }
                    
                 // AJAX for winrate.
                        $.ajax({
                            url: 'https://api.opendota.com/api/players/'+profile+'/wl',
                            async: false,
                            success: function(response){
                                $("#ProfileWins").html(response.win + ' Wins');
                                $("#ProfileLosses").html(response.lose + ' Losses');
                                $('#ProfileWinrate').html((response.win/(response.win+response.lose) * 100).toFixed(2) + '% Winrate');
                            }
                        });
                   
                    // AJAX for recent matches.
                    $.ajax({
                        url: 'https://api.opendota.com/api/players/'+profile+'/recentMatches',
                        success: function(response){  
                            $.each(response, function(i, match){ 
                                   // Finding out game mode. 
                                    $.each(game_modes, function(j, game_mode){
                                        if(match.game_mode == game_mode.id)
                                            gameMode = game_mode.name; 
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
                                        outcome = '<strong style="color:green;">Win<strong>';
                                    else 
                                        outcome = '<strong style="color:red;">Loss<strong>';
                                var MatchDate = new Date(match.start_time * 1000);
                                $("#ProfileMatches").append(
                                 '<tr>'
                                +'<td style="text-align: center;"><a href="#" style=\"font-size: 120%;\" onclick=getMatch('+match.match_id+');>' + match.match_id + '</a></td>'    
                                +'<td style="text-align: center;">' + MatchDate.toString().substring(4,24) + '</td>'
                                +'<td style="text-align: center;">' + Math.floor(match.duration / 60) + ':' + Math.floor(match.duration % 60) + '</td>'
                                +'<td style="text-align: center;">' + skillLevel + '</td>' 
                                +'<td style="text-align: center;">' + gameMode + '</td>' 
                                +'<td colspan="2">' + hero + '</td>' 
                                +'<td style="text-align: center;">' + match.kills + '/' + match.deaths + '/' + match.assists + '</td>'
                                +'<td style="text-align: center;">' + match.gold_per_min + '</td>'
                                +'<td style="text-align: center;">' + match.xp_per_min + '</td>'
                                +'<td style="text-align: center;">' + outcome + '</td>' // TO-DO
                                +'</tr>'
                                );
                            });
                        },
                        error: function(){
                            alert('Unable to find recent matches.');
                        }
                    });
                    $("#ProfileTable").fadeIn();
                }
            }); 
        }
    </script>
</html>