<map version="0.9.0">
<!-- To view this file, download free mind mapping software FreeMind from http://freemind.sourceforge.net -->
<node COLOR="#000000" CREATED="1392905749608" ID="ID_1693624649" MODIFIED="1394843353523" TEXT="up your league">
<font NAME="SansSerif" SIZE="20"/>
<hook NAME="accessories/plugins/AutomaticLayout.properties"/>
<hook NAME="accessories/plugins/CreationModificationPlugin_new.properties"/>
<node COLOR="#0033ff" CREATED="1392905797478" FOLDED="true" ID="ID_1411698052" MODIFIED="1394338849562" POSITION="right" TEXT="Tours">
<richcontent TYPE="NOTE"><html>
  <head>
    
  </head>
  <body>
    <ul>
      <li>
        Tours are the most top-level structure to the event layout. A &quot;Tour&quot; is a collection of events that span multiple dates.
      </li>
      <li>
        For example, East Coast and West Coast events could be split into Tours to offer coast-specific leaderboards.
      </li>
      <li>
        Events are owned by their Tour. One event can not be owned by more than one Tour.
      </li>
    </ul>
  </body>
</html></richcontent>
<edge STYLE="sharp_bezier" WIDTH="8"/>
<font NAME="SansSerif" SIZE="18"/>
<node COLOR="#00b439" CREATED="1393291789986" FOLDED="true" ID="ID_894606513" MODIFIED="1393514734740" TEXT="Relationships">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1392958021541" ID="ID_247868201" MODIFIED="1393292299561" TEXT="hasMany events">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393291793673" FOLDED="true" ID="ID_1016574208" MODIFIED="1394338849561" TEXT="Fields">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393292330182" ID="ID_1479252592" MODIFIED="1393292331744" TEXT="id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393292332030" ID="ID_1223258201" MODIFIED="1393292333046" TEXT="name">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393291860184" ID="ID_1515801404" MODIFIED="1393292299576" TEXT="Methods">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
</node>
</node>
<node COLOR="#0033ff" CREATED="1392905800814" FOLDED="true" ID="ID_318379227" MODIFIED="1394338849565" POSITION="right" TEXT="Events">
<richcontent TYPE="NOTE"><html>
  <head>
    
  </head>
  <body>
    <ul>
      <li>
        Events are the specific venue that is hosting a competition.
      </li>
      <li>
        Events have attributes like date, time, description, costs, etc.
      </li>
      <li>
        Players will register for an event and in doing so will create handler-dog pairs assigned to specific game divisions.
      </li>
      <li>
        Players can register multiple pairs for various games within the event.
      </li>
    </ul>
  </body>
</html></richcontent>
<edge STYLE="sharp_bezier" WIDTH="8"/>
<font NAME="SansSerif" SIZE="18"/>
<node COLOR="#00b439" CREATED="1393291803244" FOLDED="true" ID="ID_1327545292" MODIFIED="1393514734743" TEXT="Relationships">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1392958031405" ID="ID_999583505" MODIFIED="1393292299592" TEXT="belongTo tours">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1392960656006" ID="ID_24813507" MODIFIED="1393292299592" TEXT="hasMany eventGames">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393291807089" FOLDED="true" ID="ID_625208842" MODIFIED="1394338849564" TEXT="Fields">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393292330182" ID="ID_608035354" MODIFIED="1393292331744" TEXT="id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393292940977" ID="ID_160389270" MODIFIED="1393292943397" TEXT="tour_id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393292332030" ID="ID_820893816" MODIFIED="1393292333046" TEXT="name">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393292926181" ID="ID_1345897693" MODIFIED="1393292947134" TEXT="description">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393292900589" ID="ID_1895015542" MODIFIED="1393292955261" TEXT="date">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393291855949" FOLDED="true" ID="ID_1654117260" MODIFIED="1393514734744" TEXT="Methods">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393293124426" ID="ID_384424164" MODIFIED="1393293134943" TEXT="registerGames">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
</node>
<node COLOR="#0033ff" CREATED="1392905802445" FOLDED="true" ID="ID_866226645" MODIFIED="1394338849576" POSITION="right" TEXT="Games">
<richcontent TYPE="NOTE"><html>
  <head>
    
  </head>
  <body>
    <ul>
      <li>
        Games are the competition types. Games will be paired with activities specific to each
      </li>
      <li>
        When a run is started, only activities that have been assigned to the game will be avilable as scoring actions.
      </li>
      <li>
        Global type activities will be stored in game entry as &quot;Up Dog Challenge&quot;
      </li>
    </ul>
  </body>
</html></richcontent>
<edge STYLE="sharp_bezier" WIDTH="8"/>
<font NAME="SansSerif" SIZE="18"/>
<node COLOR="#00b439" CREATED="1393291803244" FOLDED="true" ID="ID_944122002" MODIFIED="1393514734746" TEXT="Relationships">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1392960667531" ID="ID_67879238" MODIFIED="1393292299608" TEXT="hasMany eventGames">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1392962083098" ID="ID_898626127" MODIFIED="1393294509166" TEXT="hasMany gameActivities">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1392962328924" ID="ID_1742777196" MODIFIED="1393292299608" TEXT="hasMany achievements">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1392962626173" ID="ID_21871472" MODIFIED="1393292299608" TEXT="hasMany rounds">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393291807089" FOLDED="true" ID="ID_1472208698" MODIFIED="1394338849576" TEXT="Fields">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393292030466" ID="ID_1671291687" MODIFIED="1393292299608" TEXT="id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393292032533" ID="ID_1956055872" MODIFIED="1393292299608" TEXT="name">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393294542251" ID="ID_87448166" MODIFIED="1393294553243" TEXT="expired">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393291880893" ID="ID_654577981" MODIFIED="1393292299608" TEXT="Methods">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
</node>
</node>
<node COLOR="#0033ff" CREATED="1393617583119" FOLDED="true" ID="ID_59997131" MODIFIED="1394338849580" POSITION="right" TEXT="Divisions">
<richcontent TYPE="NOTE"><html>
  <head>
    
  </head>
  <body>
    <p>
      Some games have levels of competition where competitors are grouped together.
    </p>
    <p>
      For example, Fragility has divisions that determine how high the jumps are set.
    </p>
  </body>
</html></richcontent>
<edge STYLE="sharp_bezier" WIDTH="8"/>
<font NAME="SansSerif" SIZE="18"/>
<node COLOR="#00b439" CREATED="1393617587909" FOLDED="true" ID="ID_447016352" MODIFIED="1394338849578" TEXT="relationships">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393617595000" ID="ID_836339849" MODIFIED="1393617598499" TEXT="belongsTo games">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393618482761" ID="ID_1505844513" MODIFIED="1393618487170" TEXT="hasMany rounds">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393617591023" FOLDED="true" ID="ID_1835342412" MODIFIED="1394338849579" TEXT="fields">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393617606533" ID="ID_1975260225" MODIFIED="1393617607638" TEXT="id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393617604128" ID="ID_1721483132" MODIFIED="1393617605571" TEXT="game_id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393617612357" ID="ID_1544589538" MODIFIED="1393617613230" TEXT="name">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393617592434" ID="ID_1157913104" MODIFIED="1393617593424" TEXT="methods">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
</node>
</node>
<node COLOR="#0033ff" CREATED="1392960614634" FOLDED="true" ID="ID_513225665" MODIFIED="1394338849581" POSITION="right" TEXT="Event Games">
<edge STYLE="sharp_bezier" WIDTH="8"/>
<font NAME="SansSerif" SIZE="18"/>
<node COLOR="#00b439" CREATED="1393291803244" FOLDED="true" ID="ID_1711619189" MODIFIED="1393514734747" TEXT="Relationships">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1392960625377" ID="ID_1544691282" MODIFIED="1393292299623" TEXT="belongsTo events">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1392960634389" ID="ID_1570099792" MODIFIED="1393292299623" TEXT="belongsTo Games">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393293200398" ID="ID_1096405842" MODIFIED="1393293208544" TEXT="unique rows">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393291807089" FOLDED="true" ID="ID_452485999" MODIFIED="1394338849580" TEXT="Fields">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393292330182" ID="ID_1777615357" MODIFIED="1393292331744" TEXT="id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393292438181" ID="ID_55028027" MODIFIED="1393292441537" TEXT="event_id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393292332030" ID="ID_1594616825" MODIFIED="1393292963818" TEXT="game_id">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393292010429" FOLDED="true" ID="ID_1143462075" MODIFIED="1393514734748" TEXT="Methods">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393293174479" ID="ID_418848884" MODIFIED="1393293177289" TEXT="addGameToEvent">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393293257011" ID="ID_198657565" MODIFIED="1393293260585" TEXT="addEventToGame">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
</node>
<node COLOR="#0033ff" CREATED="1392905809036" FOLDED="true" ID="ID_596629658" MODIFIED="1394338849583" POSITION="right" TEXT="Rounds">
<richcontent TYPE="NOTE"><html>
  <head>
    
  </head>
  <body>
    <ul>
      <li>
        A round is a competition metric where all competitors/team-pairs are represented only once.
      </li>
      <li>
        Each competitor/team has many 'runs' within a round to represent an activity and that activities value.
      </li>
      <li>
        Tour-&gt;Event-&gt;Game-&gt;Round(s)-&gt;Run(s)
      </li>
    </ul>
  </body>
</html></richcontent>
<edge STYLE="sharp_bezier" WIDTH="8"/>
<font NAME="SansSerif" SIZE="18"/>
<node COLOR="#00b439" CREATED="1393291803244" FOLDED="true" ID="ID_201070923" MODIFIED="1394338849582" TEXT="Relationships">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393618511459" ID="ID_851756719" MODIFIED="1393618516404" TEXT="belongsTo divisions">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1392962649607" ID="ID_1992719445" MODIFIED="1393292299623" TEXT="hasmany runs">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393291807089" FOLDED="true" ID="ID_1476118387" MODIFIED="1394338849583" TEXT="Fields">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393292330182" ID="ID_567610001" MODIFIED="1393292331744" TEXT="id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393292332030" ID="ID_14125400" MODIFIED="1393292333046" TEXT="name">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393292845030" ID="ID_976583975" MODIFIED="1393618509596" TEXT="division_id">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393291889621" ID="ID_1516357962" MODIFIED="1393292299639" TEXT="Methods">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
</node>
</node>
<node COLOR="#0033ff" CREATED="1392905804069" FOLDED="true" ID="ID_1163394409" MODIFIED="1394338849586" POSITION="right" TEXT="Runs">
<richcontent TYPE="NOTE"><html>
  <head>
    
  </head>
  <body>
    <ul>
      <li>
        A run is a single, specific action or activitiy done within a round to compete with another team.
      </li>
      <li>
        A single team will have multiple runs per round.
      </li>
      <li>
        Activities are things like 'Throwing disc into bonus zone', 'catching all discs in the round', etc.
      </li>
      <li>
        Scoring is done by polling each player for specific activities (related to their level) in the round that qualify as scoring activities and tallying them.
      </li>
      <li>
        Achievements are done the same way by polling each player's specific achievement-based activities.
      </li>
      <li>
        Special run activities will be used to signify &quot;win&quot; or &quot;placed X&quot; after the round has been marked 'complete' by an official.
      </li>
      <li>
        This will be the most utilized table in the database and each line should include data to pair:

        <ul>
          <li>
            &#160;tour, event, round, team-pair, handler, dog, activity, and score/value of the activity.
          </li>
        </ul>
      </li>
    </ul>
  </body>
</html></richcontent>
<edge STYLE="sharp_bezier" WIDTH="8"/>
<font NAME="SansSerif" SIZE="18"/>
<node COLOR="#00b439" CREATED="1393291803244" FOLDED="true" ID="ID_932617232" MODIFIED="1393514734751" TEXT="Relationships">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1392962152232" ID="ID_1961983973" MODIFIED="1393292299639" TEXT="belongsTo Rounds">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1392961819482" ID="ID_295944666" MODIFIED="1393292299639" TEXT="hasMany runactivities">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393291807089" FOLDED="true" ID="ID_235779778" MODIFIED="1394338849585" TEXT="Fields">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393292330182" ID="ID_220678325" MODIFIED="1393292331744" TEXT="id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393292532077" ID="ID_1924028697" MODIFIED="1393292533561" TEXT="round_id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393292544316" ID="ID_433229818" MODIFIED="1393292558794" TEXT="team_pair_id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393294307751" ID="ID_757866424" MODIFIED="1393294311748" TEXT="points">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393292568129" ID="ID_965537791" MODIFIED="1394335941605" TEXT="points_total">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1394335948647" ID="ID_604645784" MODIFIED="1394335953684" TEXT="points_scored">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393294273346" ID="ID_1023038397" MODIFIED="1393513728186" TEXT="points_bonus">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1394335969285" ID="ID_1645977682" MODIFIED="1394335994916" TEXT="points_faults">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393513707788" ID="ID_230092932" MODIFIED="1394335945046" TEXT="throws_total">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393514082486" ID="ID_830403824" MODIFIED="1394335966055" TEXT="throws_scored">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393513746125" ID="ID_1705657390" MODIFIED="1393513752974" TEXT="throws_bonus">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1394335983155" ID="ID_53298128" MODIFIED="1394335991203" TEXT="throws_faults">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393513732368" ID="ID_1416664826" MODIFIED="1393513736378" TEXT="throws_missed">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393513738648" ID="ID_1694780530" MODIFIED="1393513741378" TEXT="throws_dropped">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393293356906" ID="ID_1359743079" MODIFIED="1393293362719" TEXT="is_official">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393292577988" ID="ID_1938389599" MODIFIED="1393292579301" TEXT="created">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393292579587" ID="ID_1454998049" MODIFIED="1393292581399" TEXT="modified">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393291899660" FOLDED="true" ID="ID_1007943681" MODIFIED="1393514734752" TEXT="Methods">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393292704380" ID="ID_437106589" MODIFIED="1393292706051" TEXT="scoreRun">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393293384838" ID="ID_592884684" MODIFIED="1393293386946" TEXT="confirmScore">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
</node>
<node COLOR="#0033ff" CREATED="1392905812614" ID="ID_1329840678" MODIFIED="1394339482373" POSITION="right" TEXT="Activities">
<richcontent TYPE="NOTE"><html>
  <head>
    
  </head>
  <body>
    <ul>
      <li>
        Activities are the units of measure for game scoring and achievement metrics.
      </li>
      <li>
        Activities used for round scoring are flagged as 'scoring activities' at the DB level.
      </li>
      <li>
        Some activities are true/false - will use binary as value.
      </li>
      <li>
        Each game will be assigned a set of activities which can be polled to create a scoring rubric.
      </li>
      <li>
        Along with game-specific activities, there are event, game, and division level activities that will be used for achievements.
      </li>
      <li>
        Achievements are awarded by polling the activity list, polling the achievement conditions, and comparing the values from the teams/handler/dogs rounds to the conditions required.
      </li>
    </ul>
  </body>
</html></richcontent>
<edge STYLE="sharp_bezier" WIDTH="8"/>
<font NAME="SansSerif" SIZE="18"/>
<node COLOR="#00b439" CREATED="1393291803244" FOLDED="true" ID="ID_1999950806" MODIFIED="1393514734753" TEXT="Relationships">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1392962063125" ID="ID_533558611" MODIFIED="1393292299654" TEXT="belongTo games">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1392961831244" ID="ID_1919800111" MODIFIED="1393293589330" TEXT="hasMany run_activities">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393293577450" ID="ID_499720168" MODIFIED="1393293584294" TEXT="hasMany game_activities">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393291807089" ID="ID_1921730433" MODIFIED="1394339483169" TEXT="Fields">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393292330182" ID="ID_1537462938" MODIFIED="1393292331744" TEXT="id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393292509559" ID="ID_1383441326" MODIFIED="1393292780065" TEXT="game_id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393292332030" ID="ID_200509603" MODIFIED="1393292333046" TEXT="name">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393292781007" ID="ID_1537605361" MODIFIED="1393292790899" TEXT="point_value">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393293934951" ID="ID_1655606943" MODIFIED="1394336416149" TEXT="point_factor">
<richcontent TYPE="NOTE"><html>
  <head>
    
  </head>
  <body>
    <p>
      works in conjunction with is_bonus
    </p>
    <p>
      if is_bonus, use multiplier toward &quot;point value&quot; of bonused activity.
    </p>
  </body>
</html></richcontent>
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393293930754" ID="ID_1901641994" MODIFIED="1393293933967" TEXT="is_bonus">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393291950056" ID="ID_30554101" MODIFIED="1393292299654" TEXT="Methods">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
</node>
</node>
<node COLOR="#0033ff" CREATED="1393292074528" ID="ID_139664405" MODIFIED="1394339486052" POSITION="right" TEXT="GameActivities">
<edge STYLE="sharp_bezier" WIDTH="8"/>
<font NAME="SansSerif" SIZE="18"/>
<node COLOR="#00b439" CREATED="1393293489557" FOLDED="true" ID="ID_1516294317" MODIFIED="1393514734755" TEXT="Relationships">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393293501148" ID="ID_1706761668" MODIFIED="1393293510862" TEXT="belongsTo games">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393293511309" ID="ID_691929771" MODIFIED="1393293517230" TEXT="belongsTo activities">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393293492199" ID="ID_1154370468" MODIFIED="1394339487258" TEXT="Fields">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393293519578" ID="ID_1389996407" MODIFIED="1393293522477" TEXT="id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393293523571" ID="ID_903190666" MODIFIED="1393293528945" TEXT="game_id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393293529199" ID="ID_819575244" MODIFIED="1393293531421" TEXT="activity_id">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393293493986" FOLDED="true" ID="ID_1735022148" MODIFIED="1393514734755" TEXT="Methods">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393293548164" ID="ID_1724697391" MODIFIED="1393293553778" TEXT="addActivityToGame">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393293554056" ID="ID_1758729249" MODIFIED="1393293560762" TEXT="addGameToActivity">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
</node>
<node COLOR="#0033ff" CREATED="1392961800444" FOLDED="true" ID="ID_1032056625" MODIFIED="1394338849591" POSITION="right" TEXT="RunActivities">
<edge STYLE="sharp_bezier" WIDTH="8"/>
<font NAME="SansSerif" SIZE="18"/>
<node COLOR="#00b439" CREATED="1393291803244" FOLDED="true" ID="ID_1882506580" MODIFIED="1393514734757" TEXT="Relationships">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1392961847066" ID="ID_964674742" MODIFIED="1393292299654" TEXT="belongsto runs">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1392961850294" ID="ID_1688924835" MODIFIED="1393292299654" TEXT="belongsto acitivities">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393291807089" FOLDED="true" ID="ID_1077198988" MODIFIED="1394338849591" TEXT="Fields">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393292330182" ID="ID_1241385446" MODIFIED="1393292331744" TEXT="id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393292724043" ID="ID_1609406238" MODIFIED="1393294193883" TEXT="run_id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393292727826" ID="ID_1763792510" MODIFIED="1393294194927" TEXT="activity_id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393293689263" ID="ID_1813868834" MODIFIED="1393293981613" TEXT="parent_activity_id">
<richcontent TYPE="NOTE"><html>
  <head>
    
  </head>
  <body>
    <p>
      Added this to account for activity tracking for 'bonus' features.
    </p>
    <p>
      Example: if disc is caught within yellow section, points are doubled. To count those 'bonus' points the action will reference a 'bonus' activity, and use the multiplier in conjunction with the point value of the activity to add additional points.
    </p>
  </body>
</html></richcontent>
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393294412882" ID="ID_1032617717" MODIFIED="1393294417583" TEXT="deleted">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393294363015" ID="ID_1244951510" MODIFIED="1393294366982" TEXT="created">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393294370466" ID="ID_897667864" MODIFIED="1393294373432" TEXT="modified">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393291963597" FOLDED="true" ID="ID_153312870" MODIFIED="1393514734758" TEXT="Methods">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393293854614" ID="ID_515461147" MODIFIED="1393293865945" TEXT="addAction">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393293866645" ID="ID_1580239049" MODIFIED="1393293871529" TEXT="addBonus">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
</node>
<node COLOR="#0033ff" CREATED="1392959335054" FOLDED="true" ID="ID_569958137" MODIFIED="1394338849593" POSITION="right" TEXT="Levels">
<richcontent TYPE="NOTE"><html>
  <head>
    
  </head>
  <body>
    <p>
      Levels is the replacement for divisions
    </p>
    <p>
      Using levels, there are modifiers in play that change the activity set
    </p>
  </body>
</html></richcontent>
<edge STYLE="sharp_bezier" WIDTH="8"/>
<font NAME="SansSerif" SIZE="18"/>
<node COLOR="#00b439" CREATED="1393291803244" FOLDED="true" ID="ID_1237500139" MODIFIED="1394338849592" TEXT="Relationships">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393295170229" ID="ID_895481032" MODIFIED="1393295188572" TEXT="belongsTo games">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393295201927" ID="ID_1304272997" MODIFIED="1393295211708" TEXT="hasMany achievements">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393291807089" FOLDED="true" ID="ID_940106943" MODIFIED="1394338849593" TEXT="Fields">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393292330182" ID="ID_474620435" MODIFIED="1393292331744" TEXT="id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393292332030" ID="ID_872071388" MODIFIED="1393292333046" TEXT="name">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393295164817" ID="ID_108999915" MODIFIED="1393295184277" TEXT="game_id">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393291986327" ID="ID_1455252560" MODIFIED="1393292299670" TEXT="Methods">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
</node>
</node>
<node COLOR="#0033ff" CREATED="1392905816131" FOLDED="true" ID="ID_539463446" MODIFIED="1394338849595" POSITION="right" TEXT="Achievements">
<richcontent TYPE="NOTE"><html>
  <head>
    
  </head>
  <body>
    <ul>
      <li>
        Achievements are awarded for reaching a specific value based on results of runs.
      </li>
      <li>
        Each achievement will be paired with conditions and if these conditions are met, the handler, dog, or team is awarded
      </li>
      <li>
        Achievements can be gained by collecting other achievements.
      </li>
    </ul>
  </body>
</html></richcontent>
<edge STYLE="sharp_bezier" WIDTH="8"/>
<font NAME="SansSerif" SIZE="18"/>
<node COLOR="#00b439" CREATED="1393291803244" FOLDED="true" ID="ID_761628645" MODIFIED="1393514734758" TEXT="Relationships">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1392962312916" ID="ID_1053571692" MODIFIED="1393295220951" TEXT="belongsTo levels">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1392961970880" ID="ID_1502973357" MODIFIED="1393292299654" TEXT="hasMany AchievementConditions">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393295287864" ID="ID_1444769859" MODIFIED="1393295293095" TEXT="hasMany dogAchievements">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393295293321" ID="ID_1038052980" MODIFIED="1393295298109" TEXT="hasMany handlerAchievements">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393295298335" ID="ID_141844973" MODIFIED="1393295305209" TEXT="hasMany team_pair_achievements">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393291807089" FOLDED="true" ID="ID_1095268960" MODIFIED="1394338849594" TEXT="Fields">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393292330182" ID="ID_1323006865" MODIFIED="1393292331744" TEXT="id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393292332030" ID="ID_195260099" MODIFIED="1393292333046" TEXT="name">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393292406575" ID="ID_1005372213" MODIFIED="1393292407763" TEXT="game_id">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393291980008" ID="ID_214497203" MODIFIED="1393292299670" TEXT="Methods">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
</node>
</node>
<node COLOR="#0033ff" CREATED="1392907368390" FOLDED="true" ID="ID_331546116" MODIFIED="1394338849596" POSITION="right" TEXT="Achievement Conditions">
<richcontent TYPE="NOTE"><html>
  <head>
    
  </head>
  <body>
    <ul>
      <li>
        Conditions for achievements measure results from runs and compare them with the requirements for specific achievements.
      </li>
      <li>
        Conditions could quantify total rounds, runs, games, wins, or other achievements
      </li>
    </ul>
  </body>
</html></richcontent>
<edge STYLE="sharp_bezier" WIDTH="8"/>
<font NAME="SansSerif" SIZE="18"/>
<icon BUILTIN="messagebox_warning"/>
<node COLOR="#00b439" CREATED="1393291803244" FOLDED="true" ID="ID_1574828477" MODIFIED="1393514734760" TEXT="Relationships">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1392961982823" ID="ID_1992308040" MODIFIED="1393292299670" TEXT="belongsTo achievement">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393291807089" FOLDED="true" ID="ID_351790595" MODIFIED="1394338849596" TEXT="Fields">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393292330182" ID="ID_827417559" MODIFIED="1393292331744" TEXT="id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393292384587" ID="ID_906372176" MODIFIED="1393292388816" TEXT="achievement_id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393292332030" ID="ID_1396821234" MODIFIED="1393292333046" TEXT="name">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393294814058" ID="ID_1879962622" MODIFIED="1394337111076" TEXT="test_model">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393294830493" ID="ID_831686867" MODIFIED="1394337117124" TEXT="test_conditions">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393291972935" ID="ID_57135952" MODIFIED="1393292299670" TEXT="Methods">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
</node>
</node>
<node COLOR="#0033ff" CREATED="1392905824206" FOLDED="true" ID="ID_1153167635" MODIFIED="1394338849598" POSITION="right" TEXT="Handlers">
<edge STYLE="sharp_bezier" WIDTH="8"/>
<arrowlink DESTINATION="ID_1752514485" ENDARROW="Default" ENDINCLINATION="56;0;" ID="Arrow_ID_872741250" STARTARROW="None" STARTINCLINATION="56;0;"/>
<font NAME="SansSerif" SIZE="18"/>
<node COLOR="#00b439" CREATED="1393291803244" ID="ID_1796529207" MODIFIED="1393292299686" TEXT="Relationships">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
</node>
<node COLOR="#00b439" CREATED="1393291807089" FOLDED="true" ID="ID_1557622807" MODIFIED="1394338849597" TEXT="Fields">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393292330182" ID="ID_1719532375" MODIFIED="1393292331744" TEXT="id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393292332030" ID="ID_708225822" MODIFIED="1393292333046" TEXT="name">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393291989298" ID="ID_859222689" MODIFIED="1393292299686" TEXT="Methods">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
</node>
</node>
<node COLOR="#0033ff" CREATED="1393294976365" FOLDED="true" ID="ID_1406465798" MODIFIED="1394338849599" POSITION="right" TEXT="HandlerAchievements">
<edge STYLE="sharp_bezier" WIDTH="8"/>
<font NAME="SansSerif" SIZE="18"/>
<node COLOR="#00b439" CREATED="1393294966236" FOLDED="true" ID="ID_1758224329" MODIFIED="1393514734762" TEXT="relationships">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393295009965" ID="ID_1455531782" MODIFIED="1393295014744" TEXT="belongsTo handler">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393295011097" ID="ID_1221803461" MODIFIED="1393295011097" TEXT="belongsTo achievements">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393294970188" FOLDED="true" ID="ID_813136082" MODIFIED="1394338849598" TEXT="fields">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393295484433" ID="ID_551648654" MODIFIED="1393295485333" TEXT="id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393295486001" ID="ID_900735495" MODIFIED="1394337431688" TEXT="award_id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393295488534" ID="ID_1797691537" MODIFIED="1393295490153" TEXT="handler_id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393295490516" ID="ID_1218151775" MODIFIED="1393295491958" TEXT="official">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393295537525" ID="ID_33001477" MODIFIED="1393295538744" TEXT="deleted">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393295523317" ID="ID_980995036" MODIFIED="1393295527280" TEXT="created">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393295527653" ID="ID_660602075" MODIFIED="1393295529591" TEXT="modified">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393294971242" ID="ID_907245683" MODIFIED="1393294972099" TEXT="methods">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
</node>
</node>
<node COLOR="#0033ff" CREATED="1392905826700" FOLDED="true" ID="ID_485544257" MODIFIED="1394338849601" POSITION="right" TEXT="Dogs">
<edge STYLE="sharp_bezier" WIDTH="8"/>
<arrowlink DESTINATION="ID_1752514485" ENDARROW="Default" ENDINCLINATION="58;0;" ID="Arrow_ID_110552295" STARTARROW="None" STARTINCLINATION="58;0;"/>
<font NAME="SansSerif" SIZE="18"/>
<node COLOR="#00b439" CREATED="1393291803244" ID="ID_1320117395" MODIFIED="1393292299686" TEXT="Relationships">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
</node>
<node COLOR="#00b439" CREATED="1393291807089" FOLDED="true" ID="ID_1733041361" MODIFIED="1394338849600" TEXT="Fields">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393292330182" ID="ID_1638342339" MODIFIED="1393292331744" TEXT="id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393292332030" ID="ID_744055527" MODIFIED="1393292333046" TEXT="name">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393291990897" ID="ID_1113032704" MODIFIED="1393292299686" TEXT="Methods">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
</node>
</node>
<node COLOR="#0033ff" CREATED="1393294954591" FOLDED="true" ID="ID_928492131" MODIFIED="1394338849602" POSITION="right" TEXT="DogAchievements">
<edge STYLE="sharp_bezier" WIDTH="8"/>
<font NAME="SansSerif" SIZE="18"/>
<node COLOR="#00b439" CREATED="1393294966236" FOLDED="true" ID="ID_1723106072" MODIFIED="1393514734765" TEXT="relationships">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393294994725" ID="ID_1749206017" MODIFIED="1393295002474" TEXT="belongsTo dogs">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393295002885" ID="ID_383773031" MODIFIED="1393295007433" TEXT="belongsTo achievements">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393294970188" FOLDED="true" ID="ID_713509910" MODIFIED="1394338849601" TEXT="fields">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393295495992" ID="ID_165368022" MODIFIED="1393295496949" TEXT="id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393295497209" ID="ID_1641582979" MODIFIED="1393295498523" TEXT="dog_id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393295498745" ID="ID_1289743089" MODIFIED="1393295502905" TEXT="achievement_id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393295503264" ID="ID_441996968" MODIFIED="1393295504420" TEXT="official">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393295534134" ID="ID_985582068" MODIFIED="1393295535491" TEXT="deleted">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393295517053" ID="ID_1065787763" MODIFIED="1393295519168" TEXT="created">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393295519403" ID="ID_1587943430" MODIFIED="1393295521571" TEXT="modified">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393294971242" ID="ID_1404175686" MODIFIED="1393294972099" TEXT="methods">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
</node>
</node>
<node COLOR="#0033ff" CREATED="1392906081017" FOLDED="true" ID="ID_1752514485" MODIFIED="1394338849604" POSITION="right" TEXT="Team Pairs">
<richcontent TYPE="NOTE"><html>
  <head>
    
  </head>
  <body>
    <ul>
      <li>
        Team Pairs table will be used to store Handler-Dog pairs.
      </li>
      <li>
        Table will be reused for various games so that all stats from a team-pair can be realized based on these tables.
      </li>
      <li>
        Handler-Dog pair is unique and&#160;reusable -&#160;only one entry will be created in the team-pairs table.
      </li>
    </ul>
  </body>
</html></richcontent>
<edge STYLE="sharp_bezier" WIDTH="8"/>
<font NAME="SansSerif" SIZE="18"/>
<node COLOR="#00b439" CREATED="1392961540099" ID="ID_255312821" MODIFIED="1393292299686" TEXT="hasMany runs">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
</node>
<node COLOR="#00b439" CREATED="1393291803244" ID="ID_619458901" MODIFIED="1393292299686" TEXT="Relationships">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
</node>
<node COLOR="#00b439" CREATED="1393291807089" FOLDED="true" ID="ID_893116764" MODIFIED="1394338849603" TEXT="Fields">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393292330182" ID="ID_105881963" MODIFIED="1393292331744" TEXT="id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393292332030" ID="ID_1884859021" MODIFIED="1393292333046" TEXT="name">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393294007976" ID="ID_221804047" MODIFIED="1393294008858" TEXT="elo">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393291982855" ID="ID_1290227204" MODIFIED="1393292299686" TEXT="Methods">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
</node>
</node>
<node COLOR="#0033ff" CREATED="1393294985974" FOLDED="true" ID="ID_665248972" MODIFIED="1394338849606" POSITION="right" TEXT="TeamPairAchievements">
<edge STYLE="sharp_bezier" WIDTH="8"/>
<font NAME="SansSerif" SIZE="18"/>
<node COLOR="#00b439" CREATED="1393294966236" FOLDED="true" ID="ID_1552986049" MODIFIED="1393514734772" TEXT="relationships">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393295016529" ID="ID_238906513" MODIFIED="1393295025647" TEXT="belongsTo team_pairs">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393295016935" ID="ID_1445991651" MODIFIED="1393295016936" TEXT="belongsTo achievements">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393294970188" FOLDED="true" ID="ID_1436090149" MODIFIED="1394338849605" TEXT="fields">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
<node COLOR="#990000" CREATED="1393295457700" ID="ID_518322849" MODIFIED="1393295459139" TEXT="id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393295462036" ID="ID_74295517" MODIFIED="1393295466033" TEXT="achievement_id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393295471471" ID="ID_1085409546" MODIFIED="1393295474708" TEXT="team_pair_id">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393295476642" ID="ID_1968136659" MODIFIED="1393295480046" TEXT="official">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393295543060" ID="ID_1406069073" MODIFIED="1393295544159" TEXT="deleted">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393295544370" ID="ID_333994317" MODIFIED="1393295545659" TEXT="created">
<font NAME="SansSerif" SIZE="14"/>
</node>
<node COLOR="#990000" CREATED="1393295545906" ID="ID_1768869313" MODIFIED="1393295547070" TEXT="modified">
<font NAME="SansSerif" SIZE="14"/>
</node>
</node>
<node COLOR="#00b439" CREATED="1393294971242" ID="ID_373540409" MODIFIED="1393294972099" TEXT="methods">
<edge STYLE="bezier" WIDTH="thin"/>
<font NAME="SansSerif" SIZE="16"/>
</node>
</node>
</node>
</map>
