<br />
<?php if (!defined('FLUX_ROOT')) exit; ?>

<?php 

$Rank = array(

		"Civilian",

		"Private",

		"Corporal",

		"Sergeant",

		"Master<br>Sergeant",

		"Sergeant<br>Major",

		"Knight",

		"Knight<br>Lieutenant",

		"Knight<br>Captain",

		"Knight<br>Champion",

		"Lieutenant<br>Commander",

		"Commander",

		"Marshal",

		"Field Marshal",

		"Grand Marshal",

	);

	

$mySkill = array(

		"None",

		"Basic Skill",

		"Sword Mastery",

		"Two-Handed Sword Mastery",

		"Increase HP Recovery",

		"Bash",

		"Provoke",

		"Magnum Break",

		"Endure",

		"Increase SP Recovery",

		"Sight",

		"Napalm Beat",

		"Safety Wall",

		"Soul Strike",

		"Cold Bolt",

		"Frost Diver",

		"Stone Curse",

		"Fire Ball",

		"Fire Wall",

		"Fire Bolt",

		"Lightning Bolt",

		"Thunderstorm",

		"Divine Protection",

		"Demon Bane",

		"Ruwach",

		"Pneuma",

		"Teleport",

		"Warp Portal",

		"Heal",

		"Increase AGI",

		"Decrease AGI",

		"Aqua Benedicta",

		"Signum Crucis",

		"Angelus",

		"Blessing",

		"Cure",

		"Enlarge Weight Limit",

		"Discount",

		"Overcharge",

		"Pushcart",

		"Item Appraisal",

		"Vending",

		"Mammonite",

		"Owl's Eye",

		"Vulture's Eye",

		"Improve Concentration",

		"Double Strafe",

		"Arrow Shower",

		"Double Attack",

		"Improve Dodge",

		"Steal",

		"Hiding",

		"Envenom",

		"Detoxify",

		"Resurrection",

		"Spear Mastery",

		"Pierce",

		"Brandish Spear",

		"Spear Stab",

		"Spear Boomerang",

		"Twohand Quicken",

		"Counter Attack",

		"Bowling Bash",

		"Peco Peco Riding",

		"Cavalier Mastery",

		"Mace Mastery",

		"Impositio Manus",

		"Suffragium",

		"Aspersio",

		"B.S. Sacramenti",

		"Sanctuary",

		"Slow Poison",

		"Status Recovery",

		"Kyrie Eleison",

		"Magnificat",

		"Gloria",

		"Lex Divina",

		"Turn Undead",

		"Lex Aeterna",

		"Magnus Exorcismus",

		"Fire Pillar",

		"Sightrasher",

		"Fire Ivy",

		"Meteor Storm",

		"Jupitel Thunder",

		"Lord of Vermilion",

		"Water Ball",

		"Ice Wall",

		"Frost Nova",

		"Storm Gust",

		"Earth Spike",

		"Heaven's Drive",

		"Quagmire",

		"Sense",

		"Iron Tempering",

		"Steel Tempering",

		"Enchanted Stone Craft",

		"Oridecon Research",

		"Smith Dagger",

		"Smith Sword",

		"Smith Two-handed Sword",

		"Smith Axe",

		"Smith Mace",

		"Smith Knucklebrace",

		"Smith Spear",

		"Hilt Binding",

		"Ore Discovery",

		"Weaponry Research",

		"Weapon Repair",

		"Skin Tempering",

		"Hammer Fall",

		"Adrenaline Rush",

		"Weapon Perfection",

		"Power-Thrust",

		"Maximize Power",

		"Skid Trap",

		"Land Mine",

		"Ankle Snare",

		"Shockwave Trap",

		"Sandman",

		"Flasher",

		"Freezing Trap",

		"Blast Mine",

		"Claymore Trap",

		"Remove Trap",

		"Talkie Box",

		"Beast Bane",

		"Falconry Mastery",

		"Steel Crow",

		"Blitz Beat",

		"Detect",

		"Spring Trap",

		"Righthand Mastery",

		"Lefthand Mastery",

		"Katar Mastery",

		"Cloaking",

		"Sonic Blow",

		"Grimtooth",

		"Enchant Poison",

		"Poison React",

		"Venom Dust",

		"Venom Splasher",

		"First Aid",

		"Play Dead",

		"Moving HP-Recovery",

		"Fatal Blow",

		"Auto Berserk",

		"Arrow Crafting",

		"Arrow Repel",

		"Sand Attack",

		"Back Slide",

		"Find Stone",

		"Stone Fling",

		"Cart Revolution",

		"Change Cart",

		"Crazy Uproar",

		"Holy Light",

		"Energy Coat",

		"Piercing Attack",

		"Spirit Destruction",

		"Stand off attack",

		"Attribute Change",

		"Water Attribute Change",

		"Earth Attribute Change",

		"Fire Attribute Change",

		"Wind Attribute Change",

		"Poison Attribute Change",

		"Holy Attribute Change",

		"Shadow Attribute Change",

		"Ghost Attribute Change",

		"Defense disregard attack",

		"Multi-stage Attack",

		"Guided Attack",

		"Suicide bombing",

		"Splash attack",

		"Suicide",

		"Poison Attack",

		"Blind Attack",

		"Silence Attack",

		"Stun Attack",

		"Petrify Attack",

		"Curse Attack",

		"Sleep attack",

		"Random Attack",

		"Water Attribute Attack",

		"Earth Attribute Attack",

		"Fire Attribute Attack",

		"Wind Attribute Attack",

		"Poison Attribute Attack",

		"Holy Attribute Attack",

		"Shadow Attribute Attack",

		"Ghost Attribute Attack",

		"Demon Shock Attack",

		"Metamorphosis",

		"Provocation",

		"Smoking",

		"Follower Summons",

		"Emotion",

		"Transformation",

		"Sucking Blood",

		"Energy Drain",

		"Keeping",

		"Dark Breath",

		"Dark Blessing",

		"Barrier",

		"Defender",

		"Lick",

		"Hallucination",

		"Rebirth",

		"Monster Summons",

		"Gank",

		"Mug",

		"Back Stab",

		"Stalk",

		"Sightless Mind",

		"Divest Weapon",

		"Divest Shield",

		"Divest Armor",

		"Divest Helm",

		"Snatch",

		"Scribble",

		"Piece",

		"Remover",

		"Slyness",

		"Haggle",

		"Intimidate",

		"Axe Mastery",

		"Potion Research",

		"Prepare Potion",

		"Bomb",

		"Acid Terror",

		"Aid Potion",

		"Summon Flora",

		"Summon Marine Sphere",

		"Alchemical Weapon",

		"Synthesized Shield",

		"Synthetic Armor",

		"Biochemical Helm",

		"Bioethics",

		"Biotechnology",

		"Life Creation",

		"Cultivation",

		"Flame Control",

		"Call Homunculus",

		"Vaporize",

		"Drillmaster",

		"Heal Homunculus",

		"Homunculus Resurrection",

		"Faith",

		"Guard",

		"Smite",

		"Shield Boomerang",

		"Shield Reflect",

		"Holy Cross",

		"Grand Cross",

		"Sacrifice",

		"Resistant Souls",

		"Defending Aura",

		"Spear Quicken",

		"Iron Fists",

		"Spiritual Cadence",

		"Summon Spirit Sphere",

		"Absorb Spirit Sphere",

		"Raging Trifecta Blow",

		"Snap",

		"Dodge",

		"Occult Impaction",

		"Throw Spirit Sphere",

		"Mental Strength",

		"Root",

		"Fury",

		"Asura Strike",

		"Raging Quadruple Blow",

		"Raging Thrust",

		"Study",

		"Cast Cancel",

		"Magic Rod",

		"Spell Breaker",

		"Free Cast",

		"Hindsight",

		"Endow Blaze",

		"Endow Tsunami",

		"Endow Tornado",

		"Endow Quake",

		"Dragonology",

		"Volcano",

		"Deluge",

		"Whirlwind",

		"Magnetic Earth",

		"Dispell",

		"Hocus-pocus",

		"Monocell",

		"Class Change",

		"Monster Chant",

		"Grampus Morph",

		"Grim Reaper",

		"Gold Digger",

		"Beastly Hypnosis",

		"Questioning",

		"Gravity",

		"Leveling",

		"Suicide",

		"Rejuvenation",

		"Coma",

		"Amp",

		"Encore",

		"Lullaby",

		"Mental Sensing",

		"Down Tempo",

		"Battle Theme",

		"Harmonic Lick",

		"Classical Pluck",

		"Power Chord",

		"Acoustic Rhythm",

		"Ragnarok",

		"Music Lessons",

		"Melody Strike",

		"Unchained Serenade",

		"Unbarring Octave",

		"Perfect Tablature",

		"Impressive Riff",

		"Magic Strings",

		"Song of Lutie",

		"Dance Lessons",

		"Slinging Arrow",

		"Hip Shaker",

		"Dazzler",

		"Focus Ballet",

		"Slow Grace",

		"Lady Luck",

		"Gypsy's Kiss",

		"Random Move",

		"Speed UP",

		"Revenge",

		"I Will Protect You",

		"I Look up to You",

		"I miss You",

		"Throw Tomahawk",

		"Cross of Darkness",

		"Grand cross of Darkness",

		"Soul Strike of Darkness",

		"Darkness Jupitel",

		"Stop",

		"Break weapon",

		"Break armor",

		"Break helm",

		"Break shield",

		"Undead Element Attack",

		"Undead Attribute Change",

		"Power Up",

		"Agility UP",

		"Siege Mode",

		"Recall Slaves",

		"Invisible",

		"Run",

		"Aura Blade",

		"Parrying",

		"Concentration",

		"Relax",

		"Frenzy",

		"Fury",

		"Assumptio",

		"Basilica",

		"Meditatio",

		"Soul Drain",

		"Stave Crasher",

		"Mystical Amplification",

		"Gloria Domini",

		"Martyr's Reckoning",

		"Battle Chant",

		"Raging Palm Strike",

		"Glacier Fist",

		"Chain Crush Combo",

		"Indulge",

		"Soul Exhale",

		"Soul Siphon",

		"Advanced Katar Mastery",

		"Hallucination Walk",

		"Enchant Deadly Poison",

		"Soul Destroyer",

		"Falcon Eyes",

		"Falcon Assault",

		"Focused Arrow Strike",

		"Wind Walker",

		"Shattering Strike",

		"Create Coins",

		"Create Nuggets",

		"Cart Boost",

		"Auto Attack System",

		"Stealth",

		"Counter Instinct",

		"Steal Backpack",

		"Alchemy",

		"Potion Synthesis",

		"Vulcan Arrow",

		"Sheltering Bliss",

		"Marionette Control",

		"Spiral Pierce",

		"Traumatic Blow",

		"Vital Strike",

		"Napalm Vulcan",

		"Zen",

		"Mind Breaker",

		"Foresight",

		"Blinding Mist",

		"Fiber Lock",

		"Meteor Assault",

		"Create Deadly Poison",

		"Baby",

		"Call Parent",

		"Call Baby",

		"Running",

		"Tornado Stance",

		"Tornado Kick",

		"Heel Drop Stance",

		"Heel Drop",

		"Roundhouse Stance",

		"Roundhouse Kick",

		"Counter Kick Stance",

		"Counter Kick",

		"Tumbling",

		"Flying Kick",

		"Peaceful Break",

		"Happy Break",

		"Kihop",

		"Mild Wind",

		"Taekwon Jump",

		"Feeling the Sun Moon and Stars",

		"Warmth of the Sun",

		"Warmth of the Moon",

		"Warmth of the Stars",

		"Comfort of the Sun",

		"Comfort of the Moon",

		"Comfort of the Stars",

		"Hatred of the Sun Moon and Stars",

		"Anger of the Sun",

		"Anger of the Moon",

		"Anger of the Stars",

		"Blessing of the Sun",

		"Blessing of the Moon",

		"Blessing of the Stars",

		"Demon of the Sun Moon and Stars",

		"Friend of the Sun Moon and Stars",

		"Knowledge of the Sun Moon and Stars",

		"Union of the Sun Moon and Stars",

		"Spirit of the Alchemist",

		"Aid Berserk Potion",

		"Spirit of the Monk",

		"Spirit of the Star Gladiator",

		"Spirit of the Sage",

		"Spirit of the Crusader",

		"Spirit of the Supernovice",

		"Spirit of the Knight",

		"Spirit of the Wizard",

		"Spirit of the Priest",

		"Spirit of the Artist",

		"Spirit of the Rogue",

		"Spirit of the Assasin",

		"Spirit of the Blacksmith",

		"Advanced Adrenaline Rush",

		"Spirit of the Hunter",

		"Spirit of the Soul Linker",

		"Kaizel",

		"Kaahi",

		"Kaupe",

		"Kaite",

		"Kaina",

		"Estin",

		"Estun",

		"Esma",

		"Eswoo",

		"Eske",

		"Eska",

		"Provoke Self",

		"Emotion ON",

		"Preserve",

		"Divest All",

		"Upgrade Weapon",

		"Aid Condensed Potion",

		"Full Protection",

		"Shield Chain",

		"Mana Recharge",

		"Double Casting",

		"Ganbantein",

		"Gravitation Field",

		"Cart Termination",

		"Maximum Power Thrust",

		"Longing for Freedom",

		"Wand of Hermode",

		"Tarot Card of Fate",

		"Acid Demonstration",

		"Plant Cultivation",

		"Weapon Enchantment",

		"Taekwon Mission",

		"Spirit of Rebirth",

		"Onehand Quicken",

		"Twilight Alchemy 1",

		"Twilight Alchemy 2",

		"Twilight Alchemy 3",

		"Beast Strafing",

		"Flip the Coin",

		"Fling",

		"Triple Action",

		"Bulls Eye",

		"Madness Canceller",

		"AdJustment",

		"Increasing Accuracy",

		"Magical Bullet",

		"Cracker",

		"Single Action",

		"Snake Eye",

		"Chain Action",

		"Tracking",

		"Disarm",

		"Piercing Shot",

		"Rapid Shower",

		"Desperado",

		"Gatling Fever",

		"Dust",

		"Full Buster",

		"Spread Attack",

		"Ground Drift",

		"Shuriken Training",

		"Throw Shuriken",

		"Throw Kunai",

		"Throw Huuma Shuriken",

		"Throw Zeny",

		"Improvised Defense",

		"Vanishing Slash",

		"Shadow Leap",

		"Shadow Slash",

		"Cicada Skin Sheeding",

		"Mirror Image",

		"Spirit of the Blade",

		"Crimson Fire Petal",

		"Crimson Fire Formation",

		"Raging Fire Dragon",

		"Spear of Ice",

		"Hidden Water",

		"Ice Meteor",

		"Wind Blade",

		"Lightning Strike of Destruction",

		"Kamaitachi",

		"Soul",

		"Final Strike",

		"Earthquake",

		"Fire Breath",

		"Ice Breath",

		"Thunder Breath",

		"Acid Breath",

		"Darkness Breath",

		"Dragon Fear",

		"Bleeding",

		"Pulse Strike",

		"Hell's Judgement",

		"Wide Silence",

		"Wide Freeze",

		"Wide Bleeding",

		"Wide Petrify",

		"Wide Confusion",

		"Wide Sleep",

		"Wide Sight",

		"Evil Land",

		"Magic Mirror",

		"Slow Cast",

		"Critical Wounds",

		"Expulsion",

		"Stone Skin",

		"Anti Magic",

		"Wide Curse",

		"Wide Stun",

		"Vampire Gift",

		"Wide Soul Drain",

		"Increase Weight Limit R",

		"Talk",

		"Hell Power",

		"Hell Dignity",

		"Invincible",

		"Invincible off",

		"Full Heal",

		"GM Sandman",

		"Party Blessing",

		"Party Increase AGI",

		"Party Assumptio",

		"Cat Cry",

		"Party Flee",

		"Angel's Protection",

		"Summer Night Dream",

		"Change Undead",

		"Reverse Orcish",

		"Christmas Carol",

		"ALL SONKRAN",

		"Charge Attack",

		"Shrink",

		"Sonic Acceleration",

		"Throw Venom Knife",

		"Close Confine",

		"Sight Blaster",

		"Create Elemental Converter",

		"Elemental Change Water",

		"Phantasmic Arrow",

		"Pang Voice",

		"Wink of Charm",

		"Unfair Trick",

		"Greed",

		"Redemptio",

		"Ki Translation",

		"Ki Explosion",

		"Elemental Change Earth",

		"Elemental Change Fire",

		"Elemental Change Wind",

		"Enchant Blade",

		"Sonic Wave",

		"Death Bound",

		"Hundred Spear",

		"Wind Cutter",

		"Ignition Break",

		"Dragon Training",

		"Dragon Breath",

		"Dragon Howling",

		"Rune Mastery",

		"Millenium Shield",

		"Crush Strike",

		"Refresh",

		"Giant Growth",

		"Stone Hard Skin",

		"Vitality Activation",

		"Storm Blast",

		"Fighting Spirit",

		"Abundance",

		"Phantom Thrust",

		"Venom Impress",

		"Cross Impact",

		"Dark Illusion",

		"Research New Poison",

		"Create New Poison",

		"Antidote",

		"Poisoning Weapon",

		"Weapon Blocking",

		"Counter Slash",

		"Weapon Crush",

		"Venom Pressure",

		"Poison Smoke",

		"Cloaking Exceed",

		"Phantom Menace",

		"Hallucination Walk",

		"Rolling Cutter",

		"Cross Ripper Slasher",

		"Judex",

		"Ancilla",

		"Adoramus",

		"Crementia",

		"Canto Candidus",

		"Coluceo Heal",

		"Epiclesis",

		"Praefatio",

		"Oratio",

		"Lauda Agnus",

		"Lauda Ramus",

		"Eucharistica",

		"Renovatio",

		"Highness Heal",

		"Clearance",

		"Expiatio",

		"Duple Light",

		"Duple Light Melee",

		"Duple Light Magic",

		"Silentium",

		"White Imprison",

		"Soul Expansion",

		"Frosty Misty",

		"Jack Frost",

		"Marsh of Abyss",

		"Recognized Spell",

		"Sienna Execrate",

		"Radius",

		"Stasis",

		"Drain Life",

		"Crimson Rock",

		"Hell Inferno",

		"Comet",

		"Chain Lightning",

		"Chain Lightning Attack",

		"Earth Strain",

		"Tetra Vortex",

		"Tetra Vortex Fire",

		"Tetra Vortex Water",

		"Tetra Vortex Wind",

		"Tetra Vortex Earth",

		"Summon Fire Ball",

		"Summon Lightning Ball",

		"Summon Water Ball",

		"Summon Attack Fire",

		"Summon Attack Wind",

		"Summon Attack Water",

		"Summon Attack Earth",

		"Summon Stone",

		"Release",

		"Reading Spellbook",

		"Freeze Spell",

		"Arrow Storm",

		"Fear Breeze",

		"Ranger Main",

		"Aimed Bolt",

		"Detonator",

		"Electric Shocker",

		"Cluster Bomb",

		"Warg Mastery",

		"Warg Rider",

		"Warg Dash",

		"Warg Strike",

		"Warg Bite",

		"Tooth of Warg",

		"Sensitive Keen",

		"Camouflage",

		"Research Trap",

		"Magenta Trap",

		"Cobalt Trap",

		"Maize Trap",

		"Verdure Trap",

		"Firing Trap",

		"Icebound Trap",

		"Mado License",

		"Boost Knuckle",

		"Pile Bunker // Need official range.",

		"Vulcan Arm",

		"Flame Launcher",

		"Cold Slower",

		"Arm Cannon",

		"Acceleration",

		"Hovering",

		"Front-Side Slide",

		"Back-Side Slide",

		"Mainframe Restructure",

		"Self Destruction",

		"Shape Shift",

		"Emergency Cool",

		"Infrared Scan",

		"Analyze",

		"Magnetic Field",

		"Neutral Barrier",

		"Stealth Field",

		"Repair",

		"Axe Training",

		"Research Fire/Earth",

		"Axe Boomerang",

		"Power Swing",

		"Axe Tornado",

		"FAW - Silver Sniper",

		"FAW - Magic Decoy",

		"FAW Removal",

		"Fatal Menace",

		"Reproduce",

		"Auto Shadow Spell",

		"Shadow Form",

		"Triangle Shot",

		"Body Painting",

		"Invisibility",

		"Deadly Infect",

		"Masquerade - Enervation",

		"Masquerade - Gloomy",

		"Masquerade - Ignorance",

		"Masquerade - Laziness",

		"Masquerade - Unlucky",

		"Masquerade - Weakness",

		"Strip Accessory",

		"Man Hole",

		"Dimension Door",

		"Chaos Panic",

		"Maelstrom",

		"Bloody Lust",

		"Feint Bomb",

		"Cannon Spear",

		"Banishing Point",

		"Trample",

		"Shield Press",

		"Reflect Damage",

		"Pinpoint Attack",

		"Force of Vanguard",

		"Rage Burst",

		"Shield Spell",

		"Exceed Break",

		"Over Brand",

		"Prestige",

		"Banding",

		"Moon Slasher",

		"Ray of Genesis",

		"Piety",

		"Earth Drive",

		"Hesperus Lit",

		"Inspiration",

		"Dragon Combo",

		"Sky Net Blow",

		"Earth Shaker",

		"Fallen Empire",

		"Tiger Canon",

		"Hell Gate",

		"Rampage Blaster",

		"Crescent Elbow",

		"Cursed Circle",

		"Lightning Walk",

		"Knuckle Arrow",

		"Windmill",

		"Raising Dragon",

		"Gentle Touch// What is this for? o.O [LimitLine]",

		"Assimilate Power",

		"Power Velocity",

		"Crescent Elbow Autospell",

		"Gate of Hell",

		"Gentle Touch - Quiet",

		"Gentle Touch - Cure",

		"Gentle Touch - Energy Drain",

		"Gentle Touch - Change",

		"Gentle Touch - Revitalize",

		"Swing Dance",

		"Symphony of Lovers",

		"Moonlit Serenade",

		"Windmill Rush Attack",

		"Echo Song",

		"Harmonize",

		"Lesson",

		"Metallic Sound",

		"Reverberation",

		"Reverberation Melee",

		"Reverberation Magic",

		"Dominion Impulse",

		"Severe Rainstorm",

		"Poem of The Netherworld",

		"Voice of Siren",

		"Valley of Death",

		"Deep Sleep Lullaby",

		"Circle of Nature's Sound",

		"Improvised Song",

		"Gloomy Day",

		"Great Echo",

		"Song of Mana",

		"Dance With A Warg",

		"Sound of Destruction",

		"Saturday Night Fever",

		"Lerad's Dew",

		"Melody of Sink",

		"Warcry of Beyond",

		"Unlimited Humming Voice",

		"Fire Walk",

		"Electric Walk",

		"Spell Fist",

		"Earth Grave",

		"Diamond Dust",

		"Poison Buster",

		"Psychic Wave",

		"Cloud Kill",

		"Striking",

		"Warmer",

		"Vacuum Extreme",

		"Varetyr Spear",

		"Arrullo",

		"Spirit Control",

		"Summon Fire Spirit Agni",

		"Summon Water Spirit Aqua",

		"Summon Wind Spirit Ventus",

		"Summon Earth Spirit Tera",

		"Elemental Action",

		"Four Spirit Analysis",

		"Spirit Sympathy",

		"Spirit Recovery",

		"Fire Insignia",

		"Water Insignia",

		"Wind Insignia",

		"Earth Insignia",

		"End Mark",

		"Sword Training",

		"Cart Remodeling",

		"Cart Tornado",

		"Cart Cannon",

		"Cart Boost",

		"Thorn Trap",

		"Blood Sucker",

		"Spore Explosion",

		"Wall of Thorns",

		"Crazy Weed",

		"Crazy Weed Attack",

		"Demonic Fire",

		"Fire Expansion",

		"Fire Expansion Smoke Powder",

		"Fire Expansion Tear Gas",

		"Fire Expansion Acid",

		"Hell's Plant",

		"Hell's Plant Attack",

		"Howling of Mandragora",

		"Sling Item",

		"Change Material",

		"Mix Cooking",

		"Create Bomb",

		"Special Pharmacy",

		"Sling Item Attack",

		"Sacrament",

		"Severe Rainstorm Melee",

		"Howling of Lion",

		"Ride In Lightening",

		"Overbrand Brandish",

		"Overbrand Plus Attack",

		"Odin's Recall",

		"Return To Eldicastes",

		"Purchase Shop",

		"Guardian's Recall",

		"Odin's Power",

		"Healing Touch",

		"Avoid",

		"Brain Surgery",

		"Change",

		"Castling",

		"Defense",

		"Adamantium Skin",

		"Bloodlust",

		"Moonlight",

		"Fleeting Move",

		"Speed",

		"S.B.R.44",

		"Caprice",

		"Benediction of Chaos",

		"Instruct",

		"Bio Explosion",

		"Bash",

		"Magnum Break",

		"Bowling Bash",

		"Parry",

		"Shield Reflect",

		"Frenzy",

		"Double Strafe",

		"Arrow Shower",

		"Skid Trap",

		"Land Mine",

		"Sandman",

		"Freezing Trap",

		"Remove Trap",

		"Arrow Repel",

		"Focused Arrow Strike",

		"Pierce",

		"Brandish Spear",

		"Spiral Pierce",

		"Defending Aura",

		"Guard",

		"Sacrifice",

		"Magnificat",

		"Two-Hand Quicken",

		"Sight",

		"Crash",

		"Regain",

		"Tender",

		"Benediction",

		"Recuperate",

		"Mental Cure",

		"Compress",

		"Provoke",

		"Berserk",

		"Decrease AGI",

		"Scapegoat",

		"Lex Divina",

		"Sense",

		"Kyrie Eleison",

		"Blessing",

		"Increase Agility",

		"Circle of Fire",

		"Fire Cloak",

		"Fire Mantle",

		"Water Screen",

		"Water Drop",

		"Water Barrier",

		"Wind Step",

		"Wind Curtain",

		"Zephyr",

		"Solid Skin",

		"Stone Shield",

		"Power of Gaia",

		"Pyrotechnic",

		"Heater",

		"Tropic",

		"Aqua Play",

		"Cooler",

		"Cool Air",

		"Gust",

		"Blast",

		"Wild Storm",

		"Petrology",

		"Cursed Soil",

		"Upheaval",

		"Fire Arrow",

		"Fire Bomb",

		"Fire Bomb Attack",

		"Fire Wave",

		"Fire Wave Attack",

		"Ice Needle",

		"Water Screw",

		"Water Screw Attack",

		"Tidal Weapon",

		"Wind Slasher",

		"Hurricane Rage",

		"Hurricane Rage Attack",

		"Typhoon Missile",

		"Typhoon Missile Attack",

		"Stone Hammer",

		"Rock Launcher",

		"Rock Launcher Attack",

		"Stone Rain",

		"Official Guild Approval",

		"Kafra Contract",

		"Guardian Research",

		"Strengthen Guardians",

		"Guild Extension",

		"Guild's Glory",

		"Great Leadership",

		"Glorious Wounds",

		"Cold Heart",

		"Sharp Gaze",

		"Battle Orders",

		"Regeneration",

		"Restoration",

		"Urgent Call",

		"Permanent Development"

	);

	

?>



<?php $count = 0;

	foreach ($playerLadder as $playerLadder){ 

	$count++;

	$result = intval($playerLadder->score / 270);

	if( $result > 14 )

		$result = 14;

	if( $result == 0)

		$result = 1;

?>



<table width="100%" cellpadding="0" cellspacing="0" class="yhmwhy-table2" border="0">

	<tr>

		<th width="25%" style="text-align:center; vertical-align:bottom;">

			<img src="<?php echo $this->themePath('img/rank/') . $result . ".png" ?>"/><br /><?php echo $Rank[$result] ?><br />

			<?php echo $playerLadder->score; ?><br /><br /></th>

		<th width="50%" style="text-align:center; vertical-align:bottom;"><br />

			<img src="<?php echo $this->themePath('img/') . $playerLadder->sex . "/" . $playerLadder->class . ".gif" ?>"/><br />

			<?php echo $playerLadder->name; ?><br />

			<img src="<?php echo $this->themePath('img/class/') . $playerLadder->class . ".gif" ?>"/><br />

			<?php if ($job=$this->jobClassText($playerLadder->class)): ?>

				<?php echo htmlspecialchars($job) ?>

			<?php else: ?>

				<span class="not-applicable">Unknown</span>

			<?php endif ?>

			<?php echo "<BR>" . $playerLadder->max_hp . " / " . $playerLadder->max_sp . "<BR>"; ?><br />

		</th>

		<th width="25%" style="text-align:center; vertical-align:bottom;">

			<img src="<?php echo $this->emblem($playerLadder->guild_id) ?>" /><br />

			Member of<br />

			<?php echo $playerLadder->gname; ?><br /><br />

		</th>

	</tr>

	<tr>

		<td colspan="3" style="text-align:center; color:#FFFFFF; background-color:#765930; padding:2px;"><strong>Castle Participation</strong></td>

	</tr>

	<tr>

		<td colspan="3" align="center">

			<table cellpadding="0" cellspacing="3" class="yhmwhy-table2" border="0" style="margin-bottom:0;">

				<tr>

					<th colspan="4" style="color:#FFFFFF; background-color:#f8a459">General Standings</th>

				</tr>

				<tr>

					<td style="width:24px;"><img src="<?php echo $this->themePath('img/1214.gif'); ?>"/></td>

					<td><strong>Kills</strong><br /><?php echo $playerLadder->kill_count; ?></td>

					<td style="width:24px;"><img src="<?php echo $this->themePath('img/7005.gif'); ?>"/></td>

					<td><strong>Deaths</strong><br /><?php echo $playerLadder->death_count; ?></td>

				</tr>

			</table>

			<table cellpadding="0" cellspacing="3" class="yhmwhy-table2" border="0" style="margin-bottom:0;">

				<tr>

					<th colspan="6" style="color:#FFFFFF; background-color:#f8a459">Damage</th>

				</tr>

				<tr>

					<td style="width:24px;"><img src="<?php echo $this->themePath('img/1819.gif'); ?>"/></td>

					<td><strong>Top</strong><br /><?php echo $playerLadder->top_damage; ?></td>

					<td style="width:24px;"><img src="<?php echo $this->themePath('img/1259.gif'); ?>"/></td>

					<td><strong>Done</strong><br /><?php echo $playerLadder->damage_done; ?></td>

					<td style="width:24px;"><img src="<?php echo $this->themePath('img/2108.gif'); ?>"/></td>

					<td><strong>Recv</strong><br /><?php echo $playerLadder->damage_received; ?></td>

				</tr>

			</table>

			

			<table cellpadding="0" cellspacing="0" class="yhmwhy-table2" border="0" style="margin-bottom:0;">

				<tr>

					<td style="padding:2px;">

						<table width="100%" cellpadding="0" cellspacing="3" class="yhmwhy-table2" border="0" style="margin-bottom:0;">

							<tr>

								<th colspan="4" style="color:#FFFFFF; background-color:#f8a459">Skill Support</th>

							</tr>

							<tr>

								<td style="width:24px;"><img src="<?php echo $this->themePath('img/2277.gif'); ?>"/></td>

								<td><strong>Correcto</strong><br /><?php echo $playerLadder->support_skills_used; ?></td>

								<td style="width:24px;"><img src="<?php echo $this->themePath('img/5203.gif'); ?>"/></td>

								<td><strong>Erroneo</strong><br /><?php echo $playerLadder->wrong_support_skills_used; ?></td>

							</tr>

						</table>

					</td>

					<td style="padding:2px;">

						<table width="100%" cellpadding="0" cellspacing="3" class="yhmwhy-table2" border="0" style="margin-bottom:0;">

							<tr>

								<th colspan="4" style="color:#FFFFFF; background-color:#f8a459">Total Healing</th>

							</tr>

							<tr>

								<td style="width:24px;"><img src="<?php echo $this->themePath('img/2277.gif'); ?>"/></td>

								<td><strong>Correcto</strong><br /><?php echo $playerLadder->healing_done; ?></td>

								<td style="width:24px;"><img src="<?php echo $this->themePath('img/5203.gif'); ?>"/></td>

								<td><strong>Erroneo</strong><br /><?php echo $playerLadder->wrong_healing_done; ?></td>

							</tr>

						</table>

					</td>	

				</tr>

			</table>	

			<table cellpadding="0" cellspacing="3" class="yhmwhy-table2" border="0" style="margin-bottom:0;">

				<tr>

					<th colspan="10" style="color:#FFFFFF; background-color:#f8a459">Usable Items</th>

				</tr>

				<tr>

					<td style="width:24px;"><img src="<?php echo $this->themePath('img/504.gif'); ?>"/></td>

					<td><strong>HP</strong><br /><?php echo $playerLadder->hp_heal_potions; ?></td>

					<td style="width:24px;"><img src="<?php echo $this->themePath('img/505.gif'); ?>"/></td>

					<td><strong>SP</strong><br /><?php echo $playerLadder->sp_heal_potions; ?></td>

					<td style="width:24px;"><img src="<?php echo $this->themePath('img/715.gif'); ?>"/></td>

					<td><strong>Gems</strong><br /><?php echo $playerLadder->yellow_gemstones; ?></td>

					<td style="width:24px;"><img src="<?php echo $this->themePath('img/716.gif'); ?>"/></td>

					<td><strong>Gems</strong><br /><?php echo $playerLadder->red_gemstones; ?></td>

					<td style="width:24px;"><img src="<?php echo $this->themePath('img/717.gif'); ?>"/></td>

					<td><strong>Gems</strong><br /><?php echo $playerLadder->blue_gemstones; ?></td>

				</tr>

				<tr>

					<td style="width:24px;"><img src="<?php echo $this->themePath('img/676.gif'); ?>"/></td>

					<td colspan="3"><strong>Total Zeny</strong><br /><?php echo $playerLadder->zeny_used; ?></td>

					<td style="width:24px;"><img src="<?php echo $this->themePath('img/1752.gif'); ?>"/></td>

					<td><strong>Arrow</strong><br /><?php echo $playerLadder->ammo_used; ?></td>

					<td style="width:24px;"><img src="<?php echo $this->themePath('img/7136.gif'); ?>"/></td>

					<td><strong>Bottle</strong><br /><?php echo $playerLadder->acid_demostration; ?></td>

					<td style="width:24px;"><img src="<?php echo $this->themePath('img/678.gif'); ?>"/></td>

					<td><strong>Bottle</strong><br /><?php echo $playerLadder->poison_bottles; ?></td>

				</tr>

			</table>

		</td>

	</tr>

	<tr>

		<td colspan="3" style="text-align:center; color:#FFFFFF; background-color:#765930; padding:2px;">

			<strong>

				<?php 

					if($mySID == 0){

						echo "Top 10 Casted Skills";

					}else{

						echo 'Top 20 ' . $mySkill[$mySID] . ' Casters';

					}

				?>

			</strong>

		</td>

	</tr>

	<tr>

		<td colspan="3" style="text-align:center;">

			<?php if($mySID == 0){ ?>

			<table width="100%" cellpadding="0" cellspacing="3" class="yhmwhy-table2" border="0" style="margin-bottom:0;">

				<tr>

					<th style="color:#FFFFFF; background-color:#f8a459">Skill Name</th>

					<th style="color:#FFFFFF; background-color:#f8a459">T</th>

					<th style="color:#FFFFFF; background-color:#f8a459">Count</th>

					<th style="color:#FFFFFF; background-color:#f8a459">Skill Name</th>

					<th style="color:#FFFFFF; background-color:#f8a459">T</th>

					<th style="color:#FFFFFF; background-color:#f8a459">Count</th>

				</tr>

				<?php 

					$ctr = 0;

					foreach ($playerSkill as $playerSkill){

					$ctr= $ctr + 1;

					if($ctr == 1){echo "<tr>";}

					echo "<td><img src='" . $this->themePath('img/skill/') . $playerSkill->id . ".bmp' align='absmiddle'/>&nbsp;" . $mySkill[$playerSkill->id] . "</td>";

					echo '<td align="center"><a href="?module=custom&action=wprofile&cid=' . $myCID . '&sid=' . $playerSkill->id . '"><img src="' . $this->themePath('img/casters.png') . '" border="0"></a></td>';

					echo "<td align='center'>" . $playerSkill->count . "</td>";

					if($ctr == 2){echo "</tr>"; $ctr = 0;}

					}

				?>

			</table>

			<?php }else { ?>

			<table width="75%" cellpadding="0" cellspacing="3" class="yhmwhy-table2" border="0" style="margin-bottom:0;">

				<tr>

					<th style="color:#FFFFFF; background-color:#f8a459">POS</th>

					<th style="color:#FFFFFF; background-color:#f8a459">P</th>

					<th style="color:#FFFFFF; background-color:#f8a459">Caster</th>

					<th style="color:#FFFFFF; background-color:#f8a459">Count</th>

					<th style="color:#FFFFFF; background-color:#f8a459">S.P.M</th>

				</tr>

				<?php 

					$count = 0;

					foreach ($playerSkill as $playerSkill){

						$count++;

						echo '

							<tr>

								<td>' . $count . '</td>

								<td><a href="?module=custom&action=wprofile&cid=' . $playerSkill->char_id . '"><img src="' . $this->themePath('img/viewprofile.png') . '" border="0"></a></td>

								<td>' . $playerSkill->name . '</td>

								<td align="center">' . $playerSkill->count . '</td>

								<td align="center"><font color="#8B0000"><b>' . (intval($playerSkill->count / 120)) . '</b></font></td>

							</tr>

						';

					}

				?>

			</table>

			<?php } ?>

		</td>

	</tr>

	<tr>

		<td colspan="3" style="text-align:center; color:#FFFFFF; background-color:#765930; padding:2px;">

			<?php 

				if($myTID == 0){ 

					echo "<strong>Kill Log - Last Week Deaths</strong>";

				}else{

					echo "<strong>Kill Log - Comparative</strong>";

				}

			?>

		</td>

	</tr>

	<tr>

		<td colspan="3" style="text-align:center;">

			<table width="100%" cellpadding="0" cellspacing="3" class="yhmwhy-table2" border="0" style="margin-bottom:0;">

				<tr>

					<th style="color:#FFFFFF; background-color:#f8a459">Date/Time</th>

					<th style="color:#FFFFFF; background-color:#f8a459">P</th>

					<th style="color:#FFFFFF; background-color:#f8a459">C</th>

					<th style="color:#FFFFFF; background-color:#f8a459">Victim</th>

					<th style="color:#FFFFFF; background-color:#f8a459">Map</th>

					<th style="color:#FFFFFF; background-color:#f8a459">Attack</th>

				</tr>

				<?php 

					foreach ($playerKill as $playerKill){

						echo "<tr>";

						echo "<td>" . $playerKill->time . "</td>";

						echo '<td align="center"><a href="?module=custom&action=wprofile&cid=' . $playerKill->killed_id . '"><img src="' . $this->themePath('img/viewprofile.png') . '" border="0"></a></td>';

						echo '<td align="center"><a href="?module=custom&action=wprofile&cid=' . $myCID . '&tid=' . $playerKill->killed_id . '"><img src="' . $this->themePath('img/compare.png') . '" border="0"></a></td>';

						echo "<td>" . $playerKill->killed . "</td>";

						echo "<td>" . $playerKill->map . "</td>";

						echo "<td><img src='" . $this->themePath('img/skill/') . $playerKill->skill . ".bmp' align='absmiddle'/>&nbsp;" . $mySkill[$playerKill->skill] . "</td>";

						echo "</tr>";

					}

				?>

			</table>

		</td>

	</tr>

	<tr>

		<td colspan="3" style="text-align:center; color:#FFFFFF; background-color:#765930; padding:2px;">

			<?php 

				if($myTID == 0){ 

					echo "<strong>Death Log - Last Week Deaths</strong>";

				}else{

					echo "<strong>Death Log - Comparative</strong>";

				}

			?>

		</td>

	</tr>

	<tr>

		<td colspan="3" style="text-align:center;">

			<table width="100%" cellpadding="0" cellspacing="3" class="yhmwhy-table2" border="0" style="margin-bottom:0;">

				<tr>

					<th style="color:#FFFFFF; background-color:#f8a459">Date/Time</th>

					<th style="color:#FFFFFF; background-color:#f8a459">P</th>

					<th style="color:#FFFFFF; background-color:#f8a459">C</th>

					<th style="color:#FFFFFF; background-color:#f8a459">Assassin</th>

					<th style="color:#FFFFFF; background-color:#f8a459">Map</th>

					<th style="color:#FFFFFF; background-color:#f8a459">Attack</th>

				</tr>

				<?php 

					foreach ($playerDeath as $playerDeath){

						echo "<tr>";

						echo "<td>" . $playerDeath->time . "</td>";

						echo '<td align="center"><a href="?module=custom&action=wprofile&cid=' . $playerDeath->killer_id . '"><img src="' . $this->themePath('img/viewprofile.png') . '" border="0"></a></td>';

						echo '<td align="center"><a href="?module=custom&action=wprofile&cid=' . $myCID . '&tid=' . $playerDeath->killer_id . '"><img src="' . $this->themePath('img/compare.png') . '" border="0"></a></td>';

						echo "<td>" . $playerDeath->killer . "</td>";

						echo "<td>" . $playerDeath->map . "</td>";

						echo "<td><img src='" . $this->themePath('img/skill/') . $playerDeath->skill . ".bmp' align='absmiddle'/>&nbsp;" . $mySkill[$playerDeath->skill] . "</td>";

						echo "</tr>";

					}

				?>

			</table>

		</td>

	</tr>

</table>

<?php } ?>