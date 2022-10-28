<?php
  if (is_numeric($_GET['v1'])) {
    $typesv1 = $_GET['v1'];
  } else {
    $typesv1 = 4;
  }
  
  $f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
  $typesv1 = ucwords($f->format($typesv1));
  
  //$types[0] should be the 404 screen.
  //types[1-infinity] should have your screens
  //get to your screens by heading to the file location with '?type=' then the number of the screen in the array. ("//example.com/file?type=1")

  $types = [
    [
      "Sorry User o3o",
      [
        "Why was I sent here?",
        [
          "I don't know!",
          "D:",
          "It seems a warning screen was called... but I either don't have that screen anymore or there was an error in the calling program.<br><br>... ooooor you were playing around with the URL XP"
        ]
      ]
    ],
    [
      "You Have Been Banned",
      [
        "Terms of Ban",
        [
          "Length: ",
          "Two Days",
          "All non-admin or moderator bans last a total of two days (about 48 hours)."
        ],
        [
          "Restrictions",
          "",
          "You may no longer upload or make any changes to the server.<br>(likes, comments, bios, profile pictures, posts, ect...)",
        ],
        [
          "Bypass Accounts",
          "",
          "Any attempt to create a new account to bypass an existing suspension will result in the ban of both accounts permanently."
        ]
      ],
      [
        "Who banned me?",
        [
          "Banned Issued By: ",
          "Modorator",
          "A modorator is not an admin. Modorators have signed up to modorate ProtoHub, and have limited tools to determine whether or not a ban is nessisary"
        ]
      ],
      [
        "Appealing a Ban",
        [
          "E-mail",
          "",
          '... Submitting an appleal through e-mail can take up too two days if approved. ...<br><br>To submit an appeal via e-mail, add <a href="mailto:contact@protohub.online">contact@protohub.online</a> as one of the recipients. Please have your account @ (make sure it\'s not your username), your suspected reason for the ban, and a reason you believe your ban was un-rightful included in the e-mail.<br><br>Make sure to consistantly check your spam folder after sending your email.'
        ],
        [
          "Twitter",
          "",
          '... Submitting an appleal through Twitter can take up too two days if approved. ...<br><br>Send a direct message to <a href="https://twitter.com/PawsCyro">@PawsCyro</a> including your ProtoHub account @ (make sure it\'s not your username), your suspected reason for the ban, and a reason you believe your ban was un-rightful.'
        ],
        [
          "Telegram",
          "",
          '... Submitting an appleal through Telegram can take up too two days if approved. ...<br><br>Send a direct message to <a href="https://t.me/CyroPaws">@CyroPaws</a> including your ProtoHub account @ (make sure it\'s not your username), your suspected reason for the ban, and a reason you believe your ban was un-rightful.'
        ]
      ],
      [
        "ZOR",
        [
          "Owner",
          "",
          "Looks like someone has glitchy Arcaites...<br><br>Go to the bad boi dungeon and think about what you did while I call someone from ARC."
        ]
      ]
    ],
    [
      "You Have Been Banned",
      [
        "Terms of Ban",
        [
          "Length: ",
          $typesv1 . " Days",
          "This ban can last between two to thirty days (about 48 - 720 hours)."
        ],
        [
          "Restrictions",
          "",
          "You may no longer upload or make any changes to the server.<br>(likes, comments, bios, profile pictures, posts, ect...)",
        ],
        [
          "Bypass Accounts",
          "",
          "Any attempt to create a new account to bypass an existing suspension will result in the ban of both accounts permanently."
        ]
      ],
      [
        "Who banned me?",
        [
          "Banned Issued By: ",
          "Administrator",
          "Administrators have full capability to remove & shut down accounts permanently."
        ]
      ],
      [
        "Appealing a Ban",
        [
          "E-mail",
          "",
          '... Submitting an appleal through e-mail can take up too two days if approved. ...<br><br>To submit an appeal via e-mail, add <a href="mailto:contact@protohub.online">contact@protohub.online</a> as one of the recipients. Please have your account @ (make sure it\'s not your username), your suspected reason for the ban, and a reason you believe your ban was un-rightful included in the e-mail.<br><br>Make sure to consistantly check your spam folder after sending your email.'
        ],
        [
          "Twitter",
          "",
          '... Submitting an appleal through Twitter can take up too two days if approved. ...<br><br>Send a direct message to <a href="https://twitter.com/PawsCyro">@PawsCyro</a> including your ProtoHub account @ (make sure it\'s not your username), your suspected reason for the ban, and a reason you believe your ban was un-rightful.'
        ],
        [
          "Telegram",
          "",
          '... Submitting an appleal through Telegram can take up too two days if approved. ...<br><br>Send a direct message to <a href="https://t.me/CyroPaws">@CyroPaws</a> including your ProtoHub account @ (make sure it\'s not your username), your suspected reason for the ban, and a reason you believe your ban was un-rightful.'
        ]
      ],
      [
        "ZOR",
        [
          "Owner",
          "",
          "Looks like someone has glitchy Arcaites...<br><br>Go to the bad boi dungeon and think about what you did while I call someone from ARC."
        ]
      ]
    ],
    [
      "Protogen Lore.",
      [
        "Arcai technology and Arcaites.",
        [
          "Arcai.<br>",
          "Lesson 1",
          "Arcai is an ancient mystical energy force with a religious and spiritual heritage across the universe. Regard it as an incredible power source that some beings can harness through devout training & commitment."
        ],
        [
          "Arcai study.<br>",
          "Lesson 1",
          "Arcai study predates the first cycle (Historical event), yet it is still studied and practiced in modern times."
        ],
        [
          "Arcai technology.<br>",
          "Lessons 1 - 3",
          "Arcai technology has only existed for five cycles. (approximately 500 years)<br><br>Arcai technology has allowed advancements in the manipulation of the consciousness (Control, transfer, and implant) and manipulation of energy sources, teleportation/warp travel, and environmental manipulation.<br><br>Arcai technology uses Arcai power to create forced matter manipulations, materialization, and distortions with time/space."
        ],
        [
          "Arcaites.<br>",
          "Lessons 1 - 3",
          "Arcaites are microscopic artificial life forms programmed to harness and control Arcai output. We predominantly administer Arcaites with consciousness alteration procedures such as consciousness insertion, cerebral control (Mind control), and consciousness transfer.<br><br>Arcaites can adapt and learn based on their biological brain or consciousness interactions.<br><br>Arcaites are not 100% stable and cannot always override the biological brain or consciousness. We heavily link consciousness to being the ‘soul’ of the being; there are still many unknown elements to manipulating such."
        ]
      ],
      [
        "Visor enhancements.",
        [
          "Provision.<br>",
          "Lesson 1",
          "The visor provides a particular protective layer for enhancements and facial modifications and provides an autonomous system for the Protogen to use in harsh environments."
        ],
        [
          "Visor portion.<br>",
          "Lesson 1",
          "We made the visor portion up of tightly condensed nanites, which serve many purposes on the visor alone. The nanites can shift and distort to allow the Protogen to open/close the mouth and change color/display."
        ],
        [
          "Other.<br>",
          "Lessons 1 - 4",
          "We can make the visor out of semi-transparent materials; it will be more opaque in areas of higher density (Edges are more see-through than the center). This opaqueness is due to the internal anatomy of the nanites. (Think of the organs viewable on translucent invertebrates)<br><br>To be classed as a Protogen, the Protogen must undergo the process of adding the required enhancements.<br><br>Before adding enhancements to a Protogen, the Protogen is considered a ‘blank’ or ‘shell’ since it retains no consciousness implant or activation of Arcaites.<br><br>A Protogen cannot survive in the blank/shell form and will expire quickly without enhancement features."
        ]
      ]
    ],
    [
      "Title",
      [
        "Option title",
        [
          "Option data title",
          "Option data title unbold",
          "Option data description"
        ],
        [
          "Option data title",
          "Option data title unbold",
          "Option data description"
        ]
      ],
      [
        "Option title",
        [
          "Option data title",
          "Option data title unbold",
          "Option data description"
        ],
        [
          "Option data title",
          "Option data title unbold",
          "Option data description"
        ]
      ]
    ]
  ];//name, 
  
  if (!empty($types[$_GET['type']])) {
    $num = $_GET['type'];
    if ($num == (count($types) - 1)) {
      $num = 0;
    }
  } else {
    $num = 0;
  }
?>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;900&display=swap" rel="stylesheet">
    <title>Info</title>
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
  </head>
  <body onLoad="f1(0);">
    <div class="s1">
      <div class="s1s1"><span class="s1s1s1"><svg viewBox="0 0 100.5380859375 92.6259765625" version="1.1" xmlns="http://www.w3.org/2000/svg" class=" glyph-box" style="height: 44.69606796856593px; width: 48.5140053498912px;"><g transform="matrix(1 0 0 1 -9.9609228515626 81.54296875)"><path d="M21.875 10.8887L98.584 10.8887C105.908 10.8887 110.498 5.61523 110.498-1.02539C110.498-3.02734 110.01-5.0293 108.936-6.88477L70.5078-75.4883C68.3105-79.4434 64.2578-81.543 60.2539-81.543C56.2012-81.543 52.1484-79.4434 49.9512-75.4883L11.5723-6.83594C10.5469-4.98047 9.96094-3.02734 9.96094-1.02539C9.96094 5.61523 14.5508 10.8887 21.875 10.8887ZM60.2539-21.7285C57.7148-21.7285 56.3477-23.1934 56.2988-25.7812L55.6152-52.3438C55.5664-54.9316 57.4707-56.7871 60.2051-56.7871C62.8906-56.7871 64.8926-54.8828 64.8438-52.2949L64.1602-25.7812C64.1113-23.1445 62.6953-21.7285 60.2539-21.7285ZM60.2539-5.37109C57.373-5.37109 54.834-7.71484 54.834-10.5957C54.834-13.5254 57.3242-15.8691 60.2539-15.8691C63.2324-15.8691 65.7227-13.5742 65.7227-10.5957C65.7227-7.66602 63.1836-5.37109 60.2539-5.37109Z"></path></g></svg></span></div>
      <div class="s1s2"><h1 class="s1s2s1"><?php echo $types[$num][0];?></h1></div>
      <?php
        for ($i = 1; $i < count($types[$num]); $i++) {
          echo '<div class="s1s3"><div class="s1s3s1sc1"><div class="s1s3s1sc1s1"></div><div class="s1s3s1" onClick="f1(' . ($i - 1) . ')"><span class="s1s3s1s1">' . $types[$num][$i][0] . '</span><span class="s1s3s1s2"><svg viewBox="0 0 90.778076171875 54.6396484375" version="1.1" xmlns="http://www.w3.org/2000/svg" class=" glyph-box" style="fill: rgba(60, 60, 67, 0.3);height: 12px; width: 12px;"><g transform="matrix(1 0 0 1 -9.465986328124927 62.5498046875)"><path d="M56.3477-7.91016C58.3496-7.91016 60.0586-8.69141 61.6211-10.3027L98.3398-47.8516C99.6094-49.1211 100.244-50.6348 100.244-52.4414C100.244-56.1035 97.3145-59.082 93.6523-59.082C91.8945-59.082 90.1855-58.3008 88.8672-56.9824L56.3965-23.584L23.8281-56.9824C22.5098-58.3008 20.8496-59.082 18.9941-59.082C15.3809-59.082 12.4512-56.1035 12.4512-52.4414C12.4512-50.6348 13.1348-49.1211 14.3555-47.8516L51.0742-10.2539C52.6855-8.69141 54.3457-7.91016 56.3477-7.91016Z"></path></g></svg></span></div></div><div class="s1s3s2"><div class="s1s3s2s1sc1"><div class="s1s3s2s2"></div>';
          for ($i2 = 1; $i2 < count($types[$num][$i]); $i2++) {
            echo '<div class="s1s3s2s1">' . $types[$num][$i][$i2][0] . ' <span class="s1s3s2s1s1">' . $types[$num][$i][$i2][1] . '</span><div class="s1s3s2s1s2">' . $types[$num][$i][$i2][2] . '</div></div>';
          }
          echo '</div></div></div>';
        }
      ?>
      <!--<div class="s1s3">
        <div class="s1s3s1sc1"><div class="s1s3s1sc1s1"></div><div class="s1s3s1" onClick="f1(0)"><span class="s1s3s1s1">Terms of Ban</span><span class="s1s3s1s2"><svg viewBox="0 0 90.778076171875 54.6396484375" version="1.1" xmlns="http://www.w3.org/2000/svg" class=" glyph-box" style="fill: rgba(60, 60, 67, 0.3);height: 12px; width: 12px;"><g transform="matrix(1 0 0 1 -9.465986328124927 62.5498046875)"><path d="M56.3477-7.91016C58.3496-7.91016 60.0586-8.69141 61.6211-10.3027L98.3398-47.8516C99.6094-49.1211 100.244-50.6348 100.244-52.4414C100.244-56.1035 97.3145-59.082 93.6523-59.082C91.8945-59.082 90.1855-58.3008 88.8672-56.9824L56.3965-23.584L23.8281-56.9824C22.5098-58.3008 20.8496-59.082 18.9941-59.082C15.3809-59.082 12.4512-56.1035 12.4512-52.4414C12.4512-50.6348 13.1348-49.1211 14.3555-47.8516L51.0742-10.2539C52.6855-8.69141 54.3457-7.91016 56.3477-7.91016Z"></path></g></svg></span></div></div>
        <div class="s1s3s2"><div class="s1s3s2s1sc1"><div class="s1s3s2s2"></div><div class="s1s3s2s1">Length: <span class="s1s3s2s1s1">Two Days</span><div class="s1s3s2s1s2">All non-admin or moderator bans last a total of two days (about 24 hours).</div></div><div class="s1s3s2s1">Restrictions<div class="s1s3s2s1s2">You may no longer upload or make any changes to the server.<br>(likes, comments, bios, profile pictures, posts, ect...)</div></div><div class="s1s3s2s1">Bypass Accounts<div class="s1s3s2s1s2">Any attempt to create a new account to bypass an existing suspension will result in the ban of both accounts permanently.</div></div></div></div>
      </div>
      <div class="s1s3">
        <div class="s1s3s1sc1"><div class="s1s3s1sc1s1"></div><div class="s1s3s1" onClick="f1(1)"><span class="s1s3s1s1">Who banned me?</span><span class="s1s3s1s2"><svg viewBox="0 0 90.778076171875 54.6396484375" version="1.1" xmlns="http://www.w3.org/2000/svg" class=" glyph-box" style="fill: rgba(60, 60, 67, 0.3);height: 12px; width: 12px;"><g transform="matrix(1 0 0 1 -9.465986328124927 62.5498046875)"><path d="M56.3477-7.91016C58.3496-7.91016 60.0586-8.69141 61.6211-10.3027L98.3398-47.8516C99.6094-49.1211 100.244-50.6348 100.244-52.4414C100.244-56.1035 97.3145-59.082 93.6523-59.082C91.8945-59.082 90.1855-58.3008 88.8672-56.9824L56.3965-23.584L23.8281-56.9824C22.5098-58.3008 20.8496-59.082 18.9941-59.082C15.3809-59.082 12.4512-56.1035 12.4512-52.4414C12.4512-50.6348 13.1348-49.1211 14.3555-47.8516L51.0742-10.2539C52.6855-8.69141 54.3457-7.91016 56.3477-7.91016Z"></path></g></svg></span></div></div>
        <div class="s1s3s2"><div class="s1s3s2s1sc1"><div class="s1s3s2s2"></div><div class="s1s3s2s1">Banned Issued By: <span class="s1s3s2s1s1">Modorator</span><div class="s1s3s2s1s2">A modorator is not an admin. Modorators have signed up to modorate ProtoHub, and have limited tools to determine whether or not a ban is nessisary</div></div></div></div>
      </div>
      <div class="s1s3">
        <div class="s1s3s1sc1"><div class="s1s3s1sc1s1"></div><div class="s1s3s1" onClick="f1(2)"><span class="s1s3s1s1">Appealing a Ban</span><span class="s1s3s1s2"><svg viewBox="0 0 90.778076171875 54.6396484375" version="1.1" xmlns="http://www.w3.org/2000/svg" class=" glyph-box" style="fill: rgba(60, 60, 67, 0.3);height: 12px; width: 12px;"><g transform="matrix(1 0 0 1 -9.465986328124927 62.5498046875)"><path d="M56.3477-7.91016C58.3496-7.91016 60.0586-8.69141 61.6211-10.3027L98.3398-47.8516C99.6094-49.1211 100.244-50.6348 100.244-52.4414C100.244-56.1035 97.3145-59.082 93.6523-59.082C91.8945-59.082 90.1855-58.3008 88.8672-56.9824L56.3965-23.584L23.8281-56.9824C22.5098-58.3008 20.8496-59.082 18.9941-59.082C15.3809-59.082 12.4512-56.1035 12.4512-52.4414C12.4512-50.6348 13.1348-49.1211 14.3555-47.8516L51.0742-10.2539C52.6855-8.69141 54.3457-7.91016 56.3477-7.91016Z"></path></g></svg></span></div></div>
        <div class="s1s3s2"><div class="s1s3s2s1sc1"><div class="s1s3s2s2"></div><div class="s1s3s2s1">E-mail<div class="s1s3s2s1s2">... Submitting an appleal through e-mail can take up too two days if approved. ...<br><br>To submit an appeal via e-mail, add <a href="mailto:contact@protohub.online">contact@protohub.online</a> as one of the recipients. Please have your account @ (make sure it's not your username), your suspected reason for the ban, and a reason you believe your ban was un-rightful included in the e-mail.<br><br>Make sure to consistantly check your spam folder after sending your email.</div></div><div class="s1s3s2s1">Twitter<div class="s1s3s2s1s2">... Submitting an appleal through Twitter can take up too two days if approved. ...<br><br>Send a direct message to <a href="https://twitter.com/PawsCyro">@PawsCyro</a> including your ProtoHub account @ (make sure it's not your username), your suspected reason for the ban, and a reason you believe your ban was un-rightful.</div></div><div class="s1s3s2s1">Telegram<div class="s1s3s2s1s2">... Submitting an appleal through Telegram can take up too two days if approved. ...<br><br>Send a direct message to <a href="https://t.me/CyroPaws">@CyroPaws</a> including your ProtoHub account @ (make sure it's not your username), your suspected reason for the ban, and a reason you believe your ban was un-rightful.</div></div></div></div>
      </div>
      <div class="s1s3">
        <div class="s1s3s1sc1"><div class="s1s3s1sc1s1"></div><div class="s1s3s1" onClick="f1(3)"><span class="s1s3s1s1">ZOR</span><span class="s1s3s1s2"><svg viewBox="0 0 90.778076171875 54.6396484375" version="1.1" xmlns="http://www.w3.org/2000/svg" class=" glyph-box" style="fill: rgba(60, 60, 67, 0.3);height: 12px; width: 12px;"><g transform="matrix(1 0 0 1 -9.465986328124927 62.5498046875)"><path d="M56.3477-7.91016C58.3496-7.91016 60.0586-8.69141 61.6211-10.3027L98.3398-47.8516C99.6094-49.1211 100.244-50.6348 100.244-52.4414C100.244-56.1035 97.3145-59.082 93.6523-59.082C91.8945-59.082 90.1855-58.3008 88.8672-56.9824L56.3965-23.584L23.8281-56.9824C22.5098-58.3008 20.8496-59.082 18.9941-59.082C15.3809-59.082 12.4512-56.1035 12.4512-52.4414C12.4512-50.6348 13.1348-49.1211 14.3555-47.8516L51.0742-10.2539C52.6855-8.69141 54.3457-7.91016 56.3477-7.91016Z"></path></g></svg></span></div></div>
        <div class="s1s3s2"><div class="s1s3s2s1sc1"><div class="s1s3s2s2"></div><div class="s1s3s2s1">Owner<div class="s1s3s2s1s2">Looks like someone has glitchy Arcaites...<br><br>Go to the bad boi dungeon and think about what you did while I call someone from ARC.</div></div></div></div>
      </div>-->
      <div class="s1s4"></div>
    </div>
  </body>
  <script>
    var f1v1 = [false];
    function f1(a) {
      if (f1v1[a]) {
        document.getElementsByClassName("s1s3s2")[a].style.maxHeight = "10px";
        document.getElementsByClassName("s1s3s1")[a].style.borderRadius = "10px 10px 10px 10px";
        document.getElementsByClassName("s1s3s1s2")[a].style.transform = "rotateZ(-90deg)";
      } else {
        document.getElementsByClassName("s1s3s2")[a].style.maxHeight = document.getElementsByClassName("s1s3s2s1sc1")[a].offsetHeight + "px";
        document.getElementsByClassName("s1s3s1")[a].style.borderRadius = "10px 10px 0px 0px";
        document.getElementsByClassName("s1s3s1s2")[a].style.transform = "rotateZ(0deg)";
      }
      f1v1[a] = !f1v1[a];
    }
    
    function f2() {
      if (!f1v1[0]) {
        document.getElementsByClassName("s1s3s2")[0].style.maxHeight = document.getElementsByClassName("s1s3s2s1sc1")[0].offsetHeight + "px";
        document.getElementsByClassName("s1s3s1")[0].style.borderRadius = "10px 10px 0px 0px";
        document.getElementsByClassName("s1s3s1s2")[0].style.transform = "rotateZ(0deg)";
        f1v1[0] = !f1v1[0];
      }
      for (var i = 1;i < document.getElementsByClassName("s1s3s2").length;i++) {
        if (f1v1[i]) {
          document.getElementsByClassName("s1s3s2")[i].style.maxHeight = "10px";
          document.getElementsByClassName("s1s3s1")[i].style.borderRadius = "10px 10px 10px 10px";
          document.getElementsByClassName("s1s3s1s2")[i].style.transform = "rotateZ(-90deg)";
          f1v1[i] = !f1v1[i];
        }
      }
    }
  </script>
  <style>
    body {
      margin:0px;
      background-color:rgb(229, 229, 229);
      font-family: "Open Sans", sans-serif;
    }
    a {
      text-decoration:none;
      color:rgb(10,132,255);
    }
    @media only screen and (max-width: 600px) {
      body {
        background-color: rgb(242, 241, 245);
      }
      
      .s1s3s1sc1s1 {
        background-color: rgb(242, 241, 245) !important;
      }
    }
    .s1 {
      width:800px;
      max-width:calc(100% - 40px);
      margin:0px auto;
    }
    .s1s1 {
      margin-top:30px;
      text-align:center;
    }
    .s1s1s1 {
      height:12px;
    }
    .s1s2 {
      text-align:center;
    }
    .s1s2s1 {
      font-size:20px;
    }
    .s1s3 {
      height:fit-content;
      margin-bottom:0px;
    }
    .s1s3s1sc1 {
      position: sticky;
      top:0px;
    }
    .s1s3s1sc1s1 {
      width:100%;
      height:30px;
      margin-bottom:-10px;
      background-color:rgb(229, 229, 229);
    }
    .s1s3s1 {
      padding:20px;
      background-color:white;
      border-radius:10px;
      cursor:pointer;
      border-bottom:0.5px solid rgba(0,0,0,0.1);
    }
    .s1s3s1s1 {
      font-size:17px;
      line-height:19px;
      font-weight:bold;
    }
    .s1s3s1s2 {
      height:12px;
      padding:3.5px;
      float:right;
      font-size:13px;
      transform:rotateZ(-90deg);
      transition:all 0.4s;-moz-transition:all 0.4s;-webkit-transition:all 0.4s;-o-transition:all 0.4s;
    }
    .s1s3s2 {
      background-color:white;
      max-height:10px;
      transition:all 0.4s;-moz-transition:all 0.4s;-webkit-transition:all 0.4s;-o-transition:all 0.4s;
      overflow:hidden;
      border-radius:0px 0px 10px 10px;
      margin-top:-10px;
    }
    .s1s3s2s1 {
      font-size:17px;
      font-weight:bold;
      padding:15px;
      border-bottom:0.5px solid rgba(0,0,0,0.1);
      margin-bottom:-1px;
    }
    .s1s3s2s1s1 {
      font-weight:normal;
    }
    .s1s3s2s1s2 {
      font-weight:normal;
      color:rgba(60, 60, 67, 0.6);
      margin-top:10px;
      letter-spacing: 0.5px;
    }
    .s1s3s2s1s2s1 {
      cursor:pointer;
      background-color:rgb(10,132,255);
      color:white;
      padding:5px 10px;
      margin-top:10px;
      width:fit-content;
      border-radius:9999px;
    }
    .s1s3s2s2 {
      height:10px;
    }
    .s1s4 {
      height:60px;
    }
  </style>
</html>