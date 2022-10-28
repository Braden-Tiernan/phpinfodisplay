# PHP info display page
### About
Made to be installed by a single file. (the developer must edit the file array according to the readme to get it to show what you want XP)<br><br>
The design was heavily based off of the apple webkit warning screen.
### How to use
Find the <code>$types = [</code>.<br>
The array inside is an example of a working data set.<br><br>
Use the example array to set up your info pages.<br>
A simple page should look somthing like this<br>
<pre><code>
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
    ],// Above is the data for the 404 page, this cannot be removed.
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
    ], // Below is the template for adding another page in the future and must not be removed from the array.
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
  }</code></pre>
