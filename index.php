<!doctype html>
<html>
	<head>
		<title>DotaNT</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <meta name="author" content="TDD - dzonint@yahoo.com">
        
<link rel="icon" href="img/icon.png">
<link rel="stylesheet" type="text/css" href="css/bootstrap_3.3.7_min.css">
<link rel="stylesheet" type="text/css" href="css/dota.css">
<script src="script/jquery_3.2.1_min.js"></script>
<script src="script/bootstrap_3.3.7_min.js"></script>
<script src="script/FileSaver.js"></script>
<script src="script/html2canvas.js"></script>        
<!-- Add class "sortable" to tables you want to be sortable, add class "sorttable_nosort" to columns you don't want to be sortable. -->
<script src="script/sorttable.js"></script>
	</head>

<body background="img/Background.jpg"> 
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
          <a class="navbar-brand" href="#" onclick="alert('DotaNT is a simple Dota 2 match analyzer that uses OpenDota API.\nYou can find out more at github.com/dzonint/dotant.\n');">DotaNT</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="http://steamcommunity.com/profiles/76561198113652356/">Created by <strong>TDD</strong></a>.</li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php?recentmatches">Recent matches</a></li>
                <li><a href="#" class="SearchProfilesText" onclick="toggleSearch();"><small style="color:#959595">Search for profiles</small></a></li>
                <li><a href="#" class="SearchMatchesText" onclick="toggleSearch();"><small style="color:#959595">Search for matches</small></a></li>
              
                <li class="MatchSearch"><a><label style="color:#959595">Enter a match ID:</label></a></li>
                <li class="MatchSearch"><a><input type="text" name="matchSearchID" id="matchSearchID"/></a></li>
                <li class="MatchSearch"><a><input class="btn btn-success btn-sm" id="matchSearchBtn" type="button" onclick="getMatch(1);" value="Search"></a></li>
                
                <li class="ProfileSearch"><a><label style="color:#959595"><span title="Searches based on id are instant, while the ones based on profile name take more time." style="color:red;">!</span> Enter a profile ID:</label></a></li>
                <li class="ProfileSearch"><a><input type="text" name="profileSearchID" id="profileSearchID"/></a></li>
                <li class="ProfileSearch"><a><input class="btn btn-success btn-sm" id="profileSearchBtn" type="button" onclick="getProfile(1);" value="Search"></a></li>
          </ul>
        </div>
      </div>
    </nav>
    
        <!-- RECENT MATCHES TABLE -->
    <table id="RecentMatchesTable" class="container">
        <thead> 
            <tr style="background-color:#3c414c;">
                <th style="text-align:center;">Match ID</th>
                <th style="text-align:center;">Average MMR</th>
                <th style="text-align:center;">Start time</th>
                <th style="text-align:center;">Match duration</th>
                <th style="text-align:center;">Game mode</th>
                <th style="text-align:center;">Radiant team</th>
                <th style="text-align:center;">Dire team</th>
                <th style="text-align:center;">Outcome</th>
            </tr> 
        </thead>
        <tbody id="RecentMatches"></tbody>
    </table>
    
    <!-- PROFILE SEARCH TABLE -->
    <table id="ProfileSearchTable" class="container">
        <thead>
            <tr style="background-color:#3c414c;">
                <th style="text-align:center;padding-right:20px;width:10%;">Avatar</th>
                <th style="text-align:center;width:70%;">Name</th>
                <th style="text-align:center;width:20%;">Last match</th>
            </tr> 
        </thead>
        <tbody id="ProfileSearchBody"></tbody>
    </table>
    
        <!-- PROFILE DATA TABLE -->
<table id="ProfileDataTable" class="container">
   <thead>
      <tr style="background-color: #353943;">
         <th id="ProfileAvatar" ></th>
         <th id="ProfileName" style="width:12%;"></th>
         <th style="width:29%;padding:0;">
            <ul style="list-style:none;">
                <li id="NotableHeroes"></li> 
            </ul>
          </th>
         <th style="width:33%;">
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
          <th style="padding:0;width:26%;">
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
        <thead id="ProfileRecentMatchesHeader">
            <tr style="background-color: #383c47"> 
                <th style="font-size:16pt;font-weight: bold; text-align: center;" class="sorttable_nosort">Match ID</th>
                <th style="font-size:16pt;font-weight: bold; text-align: center; color:#d7cfe0;">Date</th>
                <th style="font-size:16pt;font-weight: bold; text-align: center;" class="sorttable_nosort">Duration</th>
                <th style="font-size:16pt;font-weight: bold; text-align: center;" class="sorttable_nosort">Skill</th>
                <th style="font-size:16pt;font-weight: bold; text-align: center;" class="sorttable_nosort">Mode</th>
                <th colspan="2" style="font-size:16pt;font-weight: bold; text-align: center;color:#d7cfe0;">Hero</th>
                <th style="font-size:16pt;font-weight: bold; text-align: center;" class="sorttable_nosort">K/D/A</th>
                <th style="font-size:16pt;font-weight: bold; text-align: center;width:9%; color:#d7cfe0;">GPM</th>
                <th style="font-size:16pt;font-weight: bold; text-align: center;width:9%; color:#d7cfe0;">XPM</th>
                <th style="font-size:16pt;font-weight: bold; text-align: center;width:12%; color:#d7cfe0;">Outcome</th>
            </tr>
        </thead>
        <tbody id="ProfileRecentMatches"></tbody>
    </table>

    <!-- PROFILE FULL MATCH HISTORY TABLE -->
    <table id="ProfileFullMatchHistoryTable" class="container">
        <thead>
            <tr style="background-color: #383c47" id="ProfileFullMatchHistoryHeader"> 
                <th style="font-size:16pt;font-weight: bold; text-align: center;">Match ID</th>
                <th colspan="2" style="font-size:16pt;font-weight: bold; text-align: center;">Date</th>
                <th style="font-size:16pt;font-weight: bold; text-align: center;">Duration</th>
                <th style="font-size:16pt;font-weight: bold; text-align: center;">Skill</th>
                <th colspan="2" style="font-size:16pt;font-weight: bold; text-align: center;">Mode</th>
                <th colspan="2" style="font-size:16pt;font-weight: bold; text-align: center;">Hero</th>
                <th style="font-size:16pt;font-weight: bold; text-align: center;">K/D/A</th>
                <th style="font-size:16pt;font-weight: bold; text-align: center;width:12%;">Outcome</th>
            </tr>
        </thead>
        <tbody id="ProfileFullMatches"></tbody>
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

        <!-- MATCH DETAILS TABLE -->
        <div id="popup_match_details" class="modal fade" role="dialog">
        <div id="MatchDetails" style="display: block;">
<button type="button" class="close" data-dismiss="modal"><img id="close_details_button" src="img/close_details_button.png"></button>
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
                <div class="DetailsTableCellBackpack" id="PlayerBackpack0"></div>
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
                <div class="DetailsTableCellBackpack" id="PlayerBackpack1"></div>
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
                <div class="DetailsTableCellBackpack" id="PlayerBackpack2"></div>
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
                <div class="DetailsTableCellBackpack" id="PlayerBackpack3"></div>
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
                <div class="DetailsTableCellBackpack" id="PlayerBackpack4"></div>
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
                <div class="DetailsTableCellBackpack" id="PlayerBackpack5"></div>
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
                <div class="DetailsTableCellBackpack" id="PlayerBackpack6"></div>
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
                <div class="DetailsTableCellBackpack" id="PlayerBackpack7"></div>
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
                <div class="DetailsTableCellBackpack" id="PlayerBackpack8"></div>
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
                <div class="DetailsTableCellBackpack" id="PlayerBackpack9"></div>
                <div class="DetailsTableCellGold" id="PlayerGold9"></div>
                <div class="DetailsTableCellLastHits" id="PlayerLastHits9"></div>
                <div class="DetailsTableCellDenies" id="PlayerDenies9"></div>
                <div class="DetailsTableCellGoldMin" id="PlayerGPM9"></div>
                <div class="DetailsTableCellXPMin" id="PlayerXPM9"></div>
            </div>
        </div>
         <button type="button" onclick="makeSnapshot();" style="margin-top: 5.5cm;margin-left: 25cm; background-color: #337ab7" id="screenshotBtn"> Make a screenshot </button> 
    </div>
</div>
    
    <div class="pagination-container container">
        <nav>
            <ul class="pagination" style="text-align:center;"></ul>
        </nav>
    </div>
	</body>
    
    <!-- JSON DATA -->
    <script src="data.js"></script>

    <script>
        $(function(){ 
                    $('.ProfileSearch').toggle();
                    $('.SearchMatchesText').toggle();
                    $('table').hide();
            
                    $('#profileSearchID').keypress(function(e){
                        if(e.which == 13){//Enter key pressed
                            $('#profileSearchBtn').click();//Trigger search button click event
                        }
                    });
            
                    $('#matchSearchID').keypress(function(e){
                        if(e.which == 13){//Enter key pressed
                            $('#matchSearchBtn').click();//Trigger search button click event
                        }
                    });
            
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
            
                    <?php if(isset($_REQUEST['recentmatches'])){ ?>
                        getRecentMatches();
                    <?php } ?>
            });
        
        function getRecentMatches(){
            $("#RecentMatchesTable").fadeOut();
            $("#RecentMatches").empty();
             
            $.ajax({
                url: 'https://api.opendota.com/api/publicMatches',
                success: function(response){
                    $.each(response, function(i, match){
                        
                        $.each(game_modes, function(j, game_mode){
                            if(match.game_mode == game_mode.id){
                                gameMode = game_mode.name;
                                if(match.game_mode == 22 && match.lobby_type != 7){
                                    var temp = 'A'+game_mode.name.toString().substring(8);
                                    gameMode = temp;
                                }
                            }
                        }); 
                        radiantTeam = direTeam = ""; 
                        
                        var radID = match.radiant_team.split(',');
                        $.each(radID, function(k, hero_id){ 
                           $.each(heroes, function(l, heroes){
                             if(heroes.id == hero_id)
                                 radiantTeam += '<img src="img/heroes/eg/'+ heroes.name.substr(14) +'_eg.png" style="margin-right: 1px;">';
                           });
                        }); 
                        
                        var dirID = match.dire_team.split(',');
                        $.each(dirID, function(m, hero_id){
                           $.each(heroes, function(n, heroes){
                             if(heroes.id == hero_id)
                                 direTeam += '<img src="img/heroes/eg/'+ heroes.name.substr(14) +'_eg.png" style="margin-right: 1px;">';
                           });
                        });
                        
                        if(match.radiant_win != false)
                            outcome = '<strong style="color:green;">Radiant victory</strong>';
                        else 
                            outcome = '<strong style="color:red;">Dire victory</strong>';
                        
                        var MatchDate = new Date(match.start_time * 1000);
                        var MatchDuration = Math.floor(match.duration / 60) + ':' + Math.floor(match.duration % 60);
                        $("#RecentMatches").append(
                            '<tr style="text-align:center;">'
                            +'<td style="text-align: center;" class="sorttable_nosort"><a href="#" style=\"font-size: 12pt;\" onclick=getMatch('+match.match_id+');>' + match.match_id + '</a></td>'
                            +'<td title="Based on '+match.num_mmr+' people showing their MMR">'+match.avg_mmr+'</td>'
                            +'<td>'+MatchDate.toString().substring(4,24)+'</td>'
                            +'<td>'+MatchDuration+'</td>'
                            +'<td>'+gameMode+'</td>'
                            +'<td class="sorttable_nosort">'+radiantTeam+'</td>'
                            +'<td class="sorttable_nosort">'+direTeam+'</td>'
                            +'<td>'+outcome+'</td>'
                            +'</tr>'
                        );
                    });
                } 
            });
            // We give it 500ms so it can pick up the number of total rows. (otherwise it just picks up 0 and does nothing)
            setTimeout(function (){Pagination("#RecentMatchesTable");$("#RecentMatchesTable").fadeIn();}, 500);
        }
        
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
                $("#PlayerBackpack"+i).html('');
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
                         $("#PlayerBackpack"+i).html('');
                         $.each(heroes, function(j, heroes){
                                if(player.hero_id == heroes.id){
                                    naziv = heroes.name.substr(14);
                                    // Table.
                                    if(player.personaname != null){
                                        var Name = player.personaname;
                                        if(player.personaname.length > 19)
                                            Name = player.personaname.substring(0,19)+"...";
                                        $("#Player"+i).html('<a href="?profile='+player.account_id+'">'+Name+'</a>')
                                    }
                                    else 
                                        $("#Player"+i).html("Anonymous");
                                    
                                    $("#PlayerLevel"+i).html(player.level);
                                    $("#PlayerHero"+i).html('<img src="img/heroes/eg/' + naziv +'_eg.png" style="margin-right: 3px;">' + heroes.localized_name);
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
                                    // Checking if item is a recipe.
                                    if(items.recipe == 1)
                                        var naziv = 'recipe';
                                    else    
                                        // Cutting out item_ part of the string.
                                        var naziv = items.name.substring(5);
                                    $("#PlayerItems"+i).append('<img src="img/items/lg/'+naziv+'_lg.png" title="'+items.localized_name+'">');
                                }
                             
                                // Backpack.
                                if([player.backpack_0, player.backpack_1, player.backpack_2].indexOf(items.id) > -1){
                                    // Checking if item is a recipe.
                                    if(items.recipe == 1)
                                        var naziv = 'recipe';
                                    else 
                                        // Cutting out item_ part of the string.
                                        var naziv = items.name.substring(5);
                                    $("#PlayerBackpack"+i).append('<img src="img/items/lg/'+naziv+'_lg.png" title="'+items.localized_name+'">');
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
        
        // By default, function getProfile only gets recent matches (25 matches), due to it being a lot faster than a complete match history.
        // The 'fullMatchHistoryProfileID' argument gets used if 'Show complete match history' button on profile page is pressed.
        // The 'fullMatchHistoryHeroID' argument gets used if hero name is clicked in hero name table.
        function getProfile(profile, fullMatchHistoryProfileID, fullMatchHistoryHeroID){
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
                $("#PlayerBackpack"+i).html('');
            }
            
            // Empty out notable heroes.
            $("#NotableHeroes").html('');
            
            // Emptying out the recent matches and heroes.
            $("#ProfileRecentMatchesTable tbody").empty();
            $("#ProfileFullMatchHistoryTable tbody").empty();
            $("#ProfileHeroesTable tbody").empty();
            $("#ProfileRecentMatchesTable").fadeOut();
            $("#ProfileFullMatchHistoryTable").fadeOut();
            $("#ProfileHeroesTable").fadeOut();
            $("#ProfileSearchTable").fadeOut();
            if(profile == 1) // Means it's sent from the search button and not the URL.
                profile = $("#profileSearchID").val();
            if(fullMatchHistoryProfileID != null){ // Means it's sent from 'Show complete match history' button.
                profile = fullMatchHistoryProfileID;
                $('.pagination').fadeOut();
                if(fullMatchHistoryHeroID != null)
                    $("#ProfileFullMatches").html('<tr><td colspan="11" style="text-align:center;">Fetching specific hero match history...</td></tr>');
                else
                    $("#ProfileFullMatches").html('<tr><td colspan="11" style="text-align:center;">Fetching full match history...</td></tr>');
                $("#ProfileFullMatchHistoryTable").fadeIn();
            }
            else
                $("#ProfileDataTable").fadeOut();
            // Check if a string (community name) is entered.
            if(isNaN(profile)) {
                $(".pagination").fadeOut();
                $('table').fadeOut();
                $("#ProfileSearchBody").html('<tr><td colspan="3" style="text-align:center;">Generating results (it might take up to half a minute)...</td></tr>');
                $("#ProfileSearchTable").fadeIn();
                $.ajax({ // AJAX profile seach based on profile name.
                    url: 'https://api.opendota.com/api/search?q='+profile+'&similarity=0.7',
                    success: function(res){
                        $("#ProfileSearchBody").fadeOut();
                        $("#ProfileSearchBody").html('');
                        if (res[0] == null) // If the first object is empty, that means there are no other objects either.
                            $("#ProfileSearchBody").html('<tr><td colspan="3" style="text-align:center;">No profiles found.</td></tr>');
                        else
                            $.each(res, function(pr, profile){
                                accountID = profile.account_id;
                                profileAvatar = profile.avatarfull.replace("full", "medium");
                                profileName = profile.personaname;
                                ProfileInfo = '<a href="?profile='+accountID+'">'+profileName+'</a>';
                                if(profile.last_match_time != null)
                                    profileLastMatch = profile.last_match_time.toString().substring(0,10);
                                else
                                    profileLastMatch = "Never";

                                $("#ProfileSearchBody").append('<tr>'
                                +'<td><img src="'+profileAvatar+'"></td>'
                                +'<td style="text-align: center;">'+ProfileInfo+'</td>'
                                +'<td style="text-align: center;">'+profileLastMatch+'</td>'
                                +'</tr>'
                                );
                            });
                        Pagination('#ProfileSearchTable');
                        $("#ProfileSearchBody").fadeIn();
                        $(".pagination").fadeIn();
                    }
                });
              return; // Exit function early.
            }
            
            // Profile ID was entered.
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
                    if(response.profile == null){
                        alert('Profile not found.');
                        return;
                    }
                    $('#RecentMatchesTable').fadeOut(); // In case user comes from recent matches table.
                    // If it passed the check, then it means that the profile was found and we can get the necessary information.
                    $("#ProfileAvatar").html('<img style=\"height: 96px;width: auto;\" src="' + response.profile.avatarmedium + '">');
                    // The only difference is in argument number. ID = 1 means recent matches, ID = 2 means full match history.
                    (fullMatchHistoryProfileID != null) ? smID = 2 : smID = 1;
                    $("#ProfileName").html('<h1 style=\"font-size: 16pt;margin-top:0!important;\"><a href="'+response.profile.profileurl+'">'+ response.profile.personaname +'</a></h1><a href="#" id="showMatches" onclick="showMatches('+smID+');"><small> Matches </small></a><a href="#" id="showHeroes" onclick="showHeroes();"><small> Heroes</small></a>');
                    if(fullMatchHistoryProfileID == null || fullMatchHistoryHeroID != null)
                        $("#ProfileName").append('<br><a href="#" id="CompleteMatchHistoryBtn"><small style="font-size:6.5pt;color:#d7cfe0;">Show complete match history</small></a>');
            
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
                                            heroImage = '<img src="img/heroes/eg/' + heroes.name.substr(14) + '_eg.png" title="' + heroes.localized_name + '" style="margin-right: 3px;">';
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
                                            heroData = '<img src="img/heroes/sb/' + heroes.name.substr(14) + '_sb.png" style="margin-right: 15px;">'+'<a href="#" onclick="getProfile(1,'+profile+','+heroes.id+')"><strong style="text-align:center">'+heroes.localized_name+'</strong></a></td>';
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
                  
                // AJAX for profile matches.
                if(fullMatchHistoryProfileID != null){ // Means we are already on profile page and are getting a complete match history this time. We use fullMatchHistoryProfileID we added to the button the first time.
                    AjaxProfileURL = 'https://api.opendota.com/api/players/'+profile+'/Matches';
                    $("#ProfileFullMatchHistoryTable").fadeOut();
                    $("#ProfileFullMatches").html('');
                    if(fullMatchHistoryHeroID != null) // Means user clicked on hero's name on hero table.
                        AjaxProfileURL = 'https://api.opendota.com/api/players/'+profile+'/Matches?hero_id='+fullMatchHistoryHeroID;
                } else 
                    AjaxProfileURL = 'https://api.opendota.com/api/players/'+profile+'/recentMatches';
                    $.ajax({
                        url: AjaxProfileURL,
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
                                        else // This happens when skill:null in data, which leads to some profiles not showing if not included.
                                            skillLevel = "N/A";
                                    });
                                
                                    // Finding out hero.
                                    $.each(heroes, function(n, heroes){
                                        if(match.hero_id == heroes.id)
                                            hero = '<img src="img/heroes/eg/' + heroes.name.substr(14) +'_eg.png" style="margin-left: 20px;margin-right: 3px;">' + heroes.localized_name;
                                    });
                                
                                    // Finding out if player won. Dire slots have first bit set to 1, meaning their numeric value is above 128.
                                    if((match.player_slot >= 128 && match.radiant_win == false) || (match.player_slot < 5 && match.radiant_win == true))
                                        outcome = '<strong style="color:green;">Win</strong>';
                                    else 
                                        outcome = '<strong style="color:red;">Loss</strong>';
                                var MatchDate = new Date(match.start_time * 1000);
        
                                if(fullMatchHistoryProfileID != null)
                                    $("#ProfileFullMatches").append(
                                    '<tr>'
                                    +'<td style="text-align: center;"><a href="#" style=\"font-size: 120%;\" onclick=getMatch('+match.match_id+');>' + match.match_id + '</a></td>'    
                                    +'<td colspan="2" style="text-align: center;">' + MatchDate.toString().substring(4,24) + '</td>'
                                    +'<td style="text-align: center;">' + Math.floor(match.duration / 60) + ':' + Math.floor(match.duration % 60) + '</td>'
                                    +'<td style="text-align: center;">' + skillLevel + '</td>' 
                                    +'<td colspan="2" style="text-align: center;">' + gameMode + '</td>' 
                                    +'<td colspan="2" style="min-width:200px;padding-left:18px;">' + hero + '</td>' 
                                    +'<td style="text-align: center;">' + match.kills + '/' + match.deaths + '/' + match.assists + '</td>'
                                    +'<td style="text-align: center;">' + outcome + '</td>' // TO-DO
                                    +'</tr>'
                                    );
                                else
                                    $("#ProfileRecentMatches").append(
                                    '<tr>'
                                    +'<td style="text-align: center;"><a href="#" style=\"font-size: 120%;\" onclick=getMatch('+match.match_id+');>' + match.match_id + '</a></td>'    
                                    +'<td style="text-align: center;font-size:90%;">' + MatchDate.toString().substring(4,24) + '</td>'
                                    +'<td style="text-align: center;">' + Math.floor(match.duration / 60) + ':' + Math.floor(match.duration % 60) + '</td>'
                                    +'<td style="text-align: center;">' + skillLevel + '</td>' 
                                    +'<td style="text-align: center;">' + gameMode + '</td>' 
                                    +'<td colspan="2" style="min-width:200px;padding-left:18px;">' + hero + '</td>' 
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
                    if(fullMatchHistoryProfileID != null) {
                        var newTableObject = document.getElementById('ProfileFullMatchHistoryTable');
                        Pagination("#ProfileFullMatchHistoryTable");
                        $("#ProfileFullMatchHistoryTable").fadeIn();
                    } else {
                        var newTableObject = document.getElementById('ProfileRecentMatchesTable');
                        // Need to do it twice for some reason.
                        sorttable.makeSortable(newTableObject); 
                        sorttable.makeSortable(newTableObject);
                        Pagination("#ProfileRecentMatchesTable");
                        $("#ProfileRecentMatchesTable").fadeIn();
                    }
                    $("#CompleteMatchHistoryBtn").attr('onclick', 'getProfile(1,'+profile+')');
                    $(".pagination").fadeIn();
                }
            });  
        }
        
        function showMatches(id){
            $("#showHeroes").css("background-color", ""); 
            $("#showMatches").css('background-color','#3c414c');   
            $("#ProfileHeroesTable").fadeOut();
            
            if(id != 2)
                $("#ProfileRecentMatchesTable").fadeIn();
            else
                $("#ProfileFullMatchHistoryTable").fadeIn();
            $(".pagination").fadeIn();
        }
        
        function showHeroes(){
            $("#showMatches").css("background-color", ""); 
            $("#showHeroes").css('background-color','#3c414c');
            $("#ProfileRecentMatchesTable").fadeOut();
            $("#ProfileFullMatchHistoryTable").fadeOut();
            $(".pagination").fadeOut();
            var newTableObject = document.getElementById('ProfileHeroesTable');
            sorttable.makeSortable(newTableObject); 
            sorttable.makeSortable(newTableObject);
            $("#ProfileHeroesTable").fadeIn();
        }
        
        function Pagination(tableID){ 
            var table = tableID;
            $('.pagination').html('');
            var trnum = 0 ;	
            var maxRows = 10; 
            var totalRows = $(table+' tbody tr').length;
                $(table+' tr:gt(0)').each(function(){	
                    trnum++;				
                    if (trnum > maxRows ){		
                        $(this).hide();		
                    }if (trnum <= maxRows ){$(this).show();}
                });										
            if (totalRows > maxRows){						
                var pagenum = Math.ceil(totalRows/maxRows);	
                for (var i = 1; i <= pagenum ;){
                    $('.pagination').append('<li data-page="'+i+'">\
                                            <span>'+ i++ +'<span class="sr-only">(current)</span></span>\
                                            </li>').show();
                    }											
            } 												
            $('.pagination li:first-child').addClass('active');
            $('.pagination li').on('click',function(){	
                var pageNum = $(this).attr('data-page');
                var trIndex = 0 ;						
                $('.pagination li').removeClass('active');
                $(this).addClass('active');				 
                $(table+' tr:gt(0)').each(function(){	
                    trIndex++;	
                    if (trIndex > (maxRows*pageNum) || trIndex <= ((maxRows*pageNum)-maxRows)){
                         $(this).hide();		
                    }else {$(this).show();} 				
                }); 										
            });
        }
        
        function makeSnapshot(){
            $("#close_details_button").hide();
            $("#screenshotBtn").text('Uploading...');
            var matchID = $("#MatchID").text();
                html2canvas($("#MatchDetails"), {
                    onrendered: function(canvas) {
                        theCanvas = canvas;
                        
                        var dataURL = canvas.toDataURL();
                        $.ajax({
                                url: 'https://api.imgur.com/3/image',
                                type: 'post',
                                headers: {
                                    Authorization: 'Client-ID 3aae1ba8061dc2f'
                                },
                                data: {
                                    image: dataURL.substring(22),
                                    type: 'base64',
                                    title: 'DotaNT - Match '+ matchID
                                },
                                dataType: 'json',
                                success: function(response) { 
                                    if(response.success) {
                                        window.open(response.data.link);
                                        alert('Screenshot has been uploaded at ' + response.data.link); // In case the pop-up gets blocked.
                                        $("#screenshotBtn").text('Make a screenshot');
                                    }
                                }
                        });
                        
                        /* Save image locally.
                        canvas.toBlob(function(blob) {
                            saveAs(blob, "DotaNT - Match "+$("#MatchID").text()+".png"); 
                        });
                        */
                    }
                });
            $("#close_details_button").show();
        }
    </script>
</html>
