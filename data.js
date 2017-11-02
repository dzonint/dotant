
/* https://api.steampowered.com/IEconDOTA2_570/GetHeroes/v0001/?key=<API_KEY> */

// https://api.opendota.com/api/heroes
// HERO START.    
heroes = [  
   {  
      "id":1,
      "name":"npc_dota_hero_antimage",
      "localized_name":"Anti-Mage",
      "primary_attr":"agi",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Escape",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":2,
      "name":"npc_dota_hero_axe",
      "localized_name":"Axe",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Initiator",
         "Durable",
         "Disabler",
         "Jungler"
      ],
      "legs":2
   },
   {  
      "id":3,
      "name":"npc_dota_hero_bane",
      "localized_name":"Bane",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Support",
         "Disabler",
         "Nuker",
         "Durable"
      ],
      "legs":4
   },
   {  
      "id":4,
      "name":"npc_dota_hero_bloodseeker",
      "localized_name":"Bloodseeker",
      "primary_attr":"agi",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Disabler",
         "Jungler",
         "Nuker",
         "Initiator"
      ],
      "legs":2
   },
   {  
      "id":5,
      "name":"npc_dota_hero_crystal_maiden",
      "localized_name":"Crystal Maiden",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Support",
         "Disabler",
         "Nuker",
         "Jungler"
      ],
      "legs":2
   },
   {  
      "id":6,
      "name":"npc_dota_hero_drow_ranger",
      "localized_name":"Drow Ranger",
      "primary_attr":"agi",
      "attack_type":"Ranged",
      "roles":[  
         "Carry",
         "Disabler",
         "Pusher"
      ],
      "legs":2
   },
   {  
      "id":7,
      "name":"npc_dota_hero_earthshaker",
      "localized_name":"Earthshaker",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Support",
         "Initiator",
         "Disabler",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":8,
      "name":"npc_dota_hero_juggernaut",
      "localized_name":"Juggernaut",
      "primary_attr":"agi",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Pusher",
         "Escape"
      ],
      "legs":2
   },
   {  
      "id":9,
      "name":"npc_dota_hero_mirana",
      "localized_name":"Mirana",
      "primary_attr":"agi",
      "attack_type":"Ranged",
      "roles":[  
         "Carry",
         "Support",
         "Escape",
         "Nuker",
         "Disabler"
      ],
      "legs":2
   },
   {  
      "id":10,
      "name":"npc_dota_hero_morphling",
      "localized_name":"Morphling",
      "primary_attr":"agi",
      "attack_type":"Ranged",
      "roles":[  
         "Carry",
         "Escape",
         "Durable",
         "Nuker",
         "Disabler"
      ],
      "legs":0
   },
   {  
      "id":11,
      "name":"npc_dota_hero_nevermore",
      "localized_name":"Shadow Fiend",
      "primary_attr":"agi",
      "attack_type":"Ranged",
      "roles":[  
         "Carry",
         "Nuker"
      ],
      "legs":0
   },
   {  
      "id":12,
      "name":"npc_dota_hero_phantom_lancer",
      "localized_name":"Phantom Lancer",
      "primary_attr":"agi",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Escape",
         "Pusher",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":13,
      "name":"npc_dota_hero_puck",
      "localized_name":"Puck",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Initiator",
         "Disabler",
         "Escape",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":14,
      "name":"npc_dota_hero_pudge",
      "localized_name":"Pudge",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Disabler",
         "Initiator",
         "Durable",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":15,
      "name":"npc_dota_hero_razor",
      "localized_name":"Razor",
      "primary_attr":"agi",
      "attack_type":"Ranged",
      "roles":[  
         "Carry",
         "Durable",
         "Nuker",
         "Pusher"
      ],
      "legs":0
   },
   {  
      "id":16,
      "name":"npc_dota_hero_sand_king",
      "localized_name":"Sand King",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Initiator",
         "Disabler",
         "Nuker",
         "Escape",
         "Jungler"
      ],
      "legs":6
   },
   {  
      "id":17,
      "name":"npc_dota_hero_storm_spirit",
      "localized_name":"Storm Spirit",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Carry",
         "Escape",
         "Nuker",
         "Initiator",
         "Disabler"
      ],
      "legs":2
   },
   {  
      "id":18,
      "name":"npc_dota_hero_sven",
      "localized_name":"Sven",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Disabler",
         "Initiator",
         "Durable",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":19,
      "name":"npc_dota_hero_tiny",
      "localized_name":"Tiny",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Nuker",
         "Pusher",
         "Initiator",
         "Durable",
         "Disabler"
      ],
      "legs":2
   },
   {  
      "id":20,
      "name":"npc_dota_hero_vengefulspirit",
      "localized_name":"Vengeful Spirit",
      "primary_attr":"agi",
      "attack_type":"Ranged",
      "roles":[  
         "Support",
         "Initiator",
         "Disabler",
         "Nuker",
         "Escape"
      ],
      "legs":2
   },
   {  
      "id":21,
      "name":"npc_dota_hero_windrunner",
      "localized_name":"Windranger",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Carry",
         "Support",
         "Disabler",
         "Escape",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":22,
      "name":"npc_dota_hero_zuus",
      "localized_name":"Zeus",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":23,
      "name":"npc_dota_hero_kunkka",
      "localized_name":"Kunkka",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Disabler",
         "Initiator",
         "Durable",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":25,
      "name":"npc_dota_hero_lina",
      "localized_name":"Lina",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Support",
         "Carry",
         "Nuker",
         "Disabler"
      ],
      "legs":2
   },
   {  
      "id":26,
      "name":"npc_dota_hero_lion",
      "localized_name":"Lion",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Support",
         "Disabler",
         "Nuker",
         "Initiator"
      ],
      "legs":2
   },
   {  
      "id":27,
      "name":"npc_dota_hero_shadow_shaman",
      "localized_name":"Shadow Shaman",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Support",
         "Pusher",
         "Disabler",
         "Nuker",
         "Initiator"
      ],
      "legs":2
   },
   {  
      "id":28,
      "name":"npc_dota_hero_slardar",
      "localized_name":"Slardar",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Durable",
         "Initiator",
         "Disabler",
         "Escape"
      ],
      "legs":0
   },
   {  
      "id":29,
      "name":"npc_dota_hero_tidehunter",
      "localized_name":"Tidehunter",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Initiator",
         "Durable",
         "Disabler",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":30,
      "name":"npc_dota_hero_witch_doctor",
      "localized_name":"Witch Doctor",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Support",
         "Nuker",
         "Disabler"
      ],
      "legs":2
   },
   {  
      "id":31,
      "name":"npc_dota_hero_lich",
      "localized_name":"Lich",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Support",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":32,
      "name":"npc_dota_hero_riki",
      "localized_name":"Riki",
      "primary_attr":"agi",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Escape",
         "Disabler"
      ],
      "legs":2
   },
   {  
      "id":33,
      "name":"npc_dota_hero_enigma",
      "localized_name":"Enigma",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Disabler",
         "Jungler",
         "Initiator",
         "Pusher"
      ],
      "legs":0
   },
   {  
      "id":34,
      "name":"npc_dota_hero_tinker",
      "localized_name":"Tinker",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Carry",
         "Nuker",
         "Pusher"
      ],
      "legs":2
   },
   {  
      "id":35,
      "name":"npc_dota_hero_sniper",
      "localized_name":"Sniper",
      "primary_attr":"agi",
      "attack_type":"Ranged",
      "roles":[  
         "Carry",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":36,
      "name":"npc_dota_hero_necrolyte",
      "localized_name":"Necrophos",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Carry",
         "Nuker",
         "Durable",
         "Disabler"
      ],
      "legs":2
   },
   {  
      "id":37,
      "name":"npc_dota_hero_warlock",
      "localized_name":"Warlock",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Support",
         "Initiator",
         "Disabler"
      ],
      "legs":2
   },
   {  
      "id":38,
      "name":"npc_dota_hero_beastmaster",
      "localized_name":"Beastmaster",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Initiator",
         "Disabler",
         "Durable",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":39,
      "name":"npc_dota_hero_queenofpain",
      "localized_name":"Queen of Pain",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Carry",
         "Nuker",
         "Escape"
      ],
      "legs":2
   },
   {  
      "id":40,
      "name":"npc_dota_hero_venomancer",
      "localized_name":"Venomancer",
      "primary_attr":"agi",
      "attack_type":"Ranged",
      "roles":[  
         "Support",
         "Nuker",
         "Initiator",
         "Pusher",
         "Disabler"
      ],
      "legs":0
   },
   {  
      "id":41,
      "name":"npc_dota_hero_faceless_void",
      "localized_name":"Faceless Void",
      "primary_attr":"agi",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Initiator",
         "Disabler",
         "Escape",
         "Durable"
      ],
      "legs":2
   },
   {  
      "id":42,
      "name":"npc_dota_hero_skeleton_king",
      "localized_name":"Wraith King",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Support",
         "Durable",
         "Disabler",
         "Initiator"
      ],
      "legs":2
   },
   {  
      "id":43,
      "name":"npc_dota_hero_death_prophet",
      "localized_name":"Death Prophet",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Carry",
         "Pusher",
         "Nuker",
         "Disabler"
      ],
      "legs":2
   },
   {  
      "id":44,
      "name":"npc_dota_hero_phantom_assassin",
      "localized_name":"Phantom Assassin",
      "primary_attr":"agi",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Escape"
      ],
      "legs":2
   },
   {  
      "id":45,
      "name":"npc_dota_hero_pugna",
      "localized_name":"Pugna",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Nuker",
         "Pusher"
      ],
      "legs":2
   },
   {  
      "id":46,
      "name":"npc_dota_hero_templar_assassin",
      "localized_name":"Templar Assassin",
      "primary_attr":"agi",
      "attack_type":"Ranged",
      "roles":[  
         "Carry",
         "Escape"
      ],
      "legs":2
   },
   {  
      "id":47,
      "name":"npc_dota_hero_viper",
      "localized_name":"Viper",
      "primary_attr":"agi",
      "attack_type":"Ranged",
      "roles":[  
         "Carry",
         "Durable",
         "Initiator",
         "Disabler"
      ],
      "legs":0
   },
   {  
      "id":48,
      "name":"npc_dota_hero_luna",
      "localized_name":"Luna",
      "primary_attr":"agi",
      "attack_type":"Ranged",
      "roles":[  
         "Carry",
         "Nuker",
         "Pusher"
      ],
      "legs":2
   },
   {  
      "id":49,
      "name":"npc_dota_hero_dragon_knight",
      "localized_name":"Dragon Knight",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Pusher",
         "Durable",
         "Disabler",
         "Initiator",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":50,
      "name":"npc_dota_hero_dazzle",
      "localized_name":"Dazzle",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Support",
         "Nuker",
         "Disabler"
      ],
      "legs":2
   },
   {  
      "id":51,
      "name":"npc_dota_hero_rattletrap",
      "localized_name":"Clockwerk",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Initiator",
         "Disabler",
         "Durable",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":52,
      "name":"npc_dota_hero_leshrac",
      "localized_name":"Leshrac",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Carry",
         "Support",
         "Nuker",
         "Pusher",
         "Disabler"
      ],
      "legs":4
   },
   {  
      "id":53,
      "name":"npc_dota_hero_furion",
      "localized_name":"Nature's Prophet",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Carry",
         "Jungler",
         "Pusher",
         "Escape",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":54,
      "name":"npc_dota_hero_life_stealer",
      "localized_name":"Lifestealer",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Durable",
         "Jungler",
         "Escape",
         "Disabler"
      ],
      "legs":2
   },
   {  
      "id":55,
      "name":"npc_dota_hero_dark_seer",
      "localized_name":"Dark Seer",
      "primary_attr":"int",
      "attack_type":"Melee",
      "roles":[  
         "Initiator",
         "Jungler",
         "Escape",
         "Disabler"
      ],
      "legs":2
   },
   {  
      "id":56,
      "name":"npc_dota_hero_clinkz",
      "localized_name":"Clinkz",
      "primary_attr":"agi",
      "attack_type":"Ranged",
      "roles":[  
         "Carry",
         "Escape",
         "Pusher"
      ],
      "legs":2
   },
   {  
      "id":57,
      "name":"npc_dota_hero_omniknight",
      "localized_name":"Omniknight",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Support",
         "Durable",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":58,
      "name":"npc_dota_hero_enchantress",
      "localized_name":"Enchantress",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Support",
         "Jungler",
         "Pusher",
         "Durable",
         "Disabler"
      ],
      "legs":4
   },
   {  
      "id":59,
      "name":"npc_dota_hero_huskar",
      "localized_name":"Huskar",
      "primary_attr":"str",
      "attack_type":"Ranged",
      "roles":[  
         "Carry",
         "Durable",
         "Initiator"
      ],
      "legs":2
   },
   {  
      "id":60,
      "name":"npc_dota_hero_night_stalker",
      "localized_name":"Night Stalker",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Initiator",
         "Durable",
         "Disabler",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":61,
      "name":"npc_dota_hero_broodmother",
      "localized_name":"Broodmother",
      "primary_attr":"agi",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Pusher",
         "Escape",
         "Nuker"
      ],
      "legs":8
   },
   {  
      "id":62,
      "name":"npc_dota_hero_bounty_hunter",
      "localized_name":"Bounty Hunter",
      "primary_attr":"agi",
      "attack_type":"Melee",
      "roles":[  
         "Escape",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":63,
      "name":"npc_dota_hero_weaver",
      "localized_name":"Weaver",
      "primary_attr":"agi",
      "attack_type":"Ranged",
      "roles":[  
         "Carry",
         "Escape"
      ],
      "legs":4
   },
   {  
      "id":64,
      "name":"npc_dota_hero_jakiro",
      "localized_name":"Jakiro",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Support",
         "Nuker",
         "Pusher",
         "Disabler"
      ],
      "legs":2
   },
   {  
      "id":65,
      "name":"npc_dota_hero_batrider",
      "localized_name":"Batrider",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Initiator",
         "Jungler",
         "Disabler",
         "Escape"
      ],
      "legs":2
   },
   {  
      "id":66,
      "name":"npc_dota_hero_chen",
      "localized_name":"Chen",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Support",
         "Jungler",
         "Pusher"
      ],
      "legs":2
   },
   {  
      "id":67,
      "name":"npc_dota_hero_spectre",
      "localized_name":"Spectre",
      "primary_attr":"agi",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Durable",
         "Escape"
      ],
      "legs":0
   },
   {  
      "id":68,
      "name":"npc_dota_hero_ancient_apparition",
      "localized_name":"Ancient Apparition",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Support",
         "Disabler",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":69,
      "name":"npc_dota_hero_doom_bringer",
      "localized_name":"Doom",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Disabler",
         "Initiator",
         "Durable",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":70,
      "name":"npc_dota_hero_ursa",
      "localized_name":"Ursa",
      "primary_attr":"agi",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Jungler",
         "Durable",
         "Disabler"
      ],
      "legs":2
   },
   {  
      "id":71,
      "name":"npc_dota_hero_spirit_breaker",
      "localized_name":"Spirit Breaker",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Initiator",
         "Disabler",
         "Durable",
         "Escape"
      ],
      "legs":2
   },
   {  
      "id":72,
      "name":"npc_dota_hero_gyrocopter",
      "localized_name":"Gyrocopter",
      "primary_attr":"agi",
      "attack_type":"Ranged",
      "roles":[  
         "Carry",
         "Nuker",
         "Disabler"
      ],
      "legs":2
   },
   {  
      "id":73,
      "name":"npc_dota_hero_alchemist",
      "localized_name":"Alchemist",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Support",
         "Durable",
         "Disabler",
         "Initiator",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":74,
      "name":"npc_dota_hero_invoker",
      "localized_name":"Invoker",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Carry",
         "Nuker",
         "Disabler",
         "Escape",
         "Pusher"
      ],
      "legs":2
   },
   {  
      "id":75,
      "name":"npc_dota_hero_silencer",
      "localized_name":"Silencer",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Carry",
         "Support",
         "Disabler",
         "Initiator",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":76,
      "name":"npc_dota_hero_obsidian_destroyer",
      "localized_name":"Outworld Devourer",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Carry",
         "Nuker",
         "Disabler"
      ],
      "legs":4
   },
   {  
      "id":77,
      "name":"npc_dota_hero_lycan",
      "localized_name":"Lycan",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Pusher",
         "Jungler",
         "Durable",
         "Escape"
      ],
      "legs":2
   },
   {  
      "id":78,
      "name":"npc_dota_hero_brewmaster",
      "localized_name":"Brewmaster",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Initiator",
         "Durable",
         "Disabler",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":79,
      "name":"npc_dota_hero_shadow_demon",
      "localized_name":"Shadow Demon",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Support",
         "Disabler",
         "Initiator",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":80,
      "name":"npc_dota_hero_lone_druid",
      "localized_name":"Lone Druid",
      "primary_attr":"agi",
      "attack_type":"Ranged",
      "roles":[  
         "Carry",
         "Pusher",
         "Jungler",
         "Durable"
      ],
      "legs":2
   },
   {  
      "id":81,
      "name":"npc_dota_hero_chaos_knight",
      "localized_name":"Chaos Knight",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Disabler",
         "Durable",
         "Pusher",
         "Initiator"
      ],
      "legs":2
   },
   {  
      "id":82,
      "name":"npc_dota_hero_meepo",
      "localized_name":"Meepo",
      "primary_attr":"agi",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Escape",
         "Nuker",
         "Disabler",
         "Initiator",
         "Pusher"
      ],
      "legs":2
   },
   {  
      "id":83,
      "name":"npc_dota_hero_treant",
      "localized_name":"Treant Protector",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Support",
         "Initiator",
         "Durable",
         "Disabler",
         "Escape"
      ],
      "legs":2
   },
   {  
      "id":84,
      "name":"npc_dota_hero_ogre_magi",
      "localized_name":"Ogre Magi",
      "primary_attr":"int",
      "attack_type":"Melee",
      "roles":[  
         "Support",
         "Nuker",
         "Disabler",
         "Durable",
         "Initiator"
      ],
      "legs":2
   },
   {  
      "id":85,
      "name":"npc_dota_hero_undying",
      "localized_name":"Undying",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Support",
         "Durable",
         "Disabler",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":86,
      "name":"npc_dota_hero_rubick",
      "localized_name":"Rubick",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Support",
         "Disabler",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":87,
      "name":"npc_dota_hero_disruptor",
      "localized_name":"Disruptor",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Support",
         "Disabler",
         "Nuker",
         "Initiator"
      ],
      "legs":2
   },
   {  
      "id":88,
      "name":"npc_dota_hero_nyx_assassin",
      "localized_name":"Nyx Assassin",
      "primary_attr":"agi",
      "attack_type":"Melee",
      "roles":[  
         "Disabler",
         "Nuker",
         "Initiator",
         "Escape"
      ],
      "legs":6
   },
   {  
      "id":89,
      "name":"npc_dota_hero_naga_siren",
      "localized_name":"Naga Siren",
      "primary_attr":"agi",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Support",
         "Pusher",
         "Disabler",
         "Initiator",
         "Escape"
      ],
      "legs":0
   },
   {  
      "id":90,
      "name":"npc_dota_hero_keeper_of_the_light",
      "localized_name":"Keeper of the Light",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Support",
         "Nuker",
         "Disabler",
         "Jungler"
      ],
      "legs":2
   },
   {  
      "id":91,
      "name":"npc_dota_hero_wisp",
      "localized_name":"Io",
      "primary_attr":"str",
      "attack_type":"Ranged",
      "roles":[  
         "Support",
         "Escape",
         "Nuker"
      ],
      "legs":0
   },
   {  
      "id":92,
      "name":"npc_dota_hero_visage",
      "localized_name":"Visage",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Support",
         "Nuker",
         "Durable",
         "Disabler",
         "Pusher"
      ],
      "legs":2
   },
   {  
      "id":93,
      "name":"npc_dota_hero_slark",
      "localized_name":"Slark",
      "primary_attr":"agi",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Escape",
         "Disabler",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":94,
      "name":"npc_dota_hero_medusa",
      "localized_name":"Medusa",
      "primary_attr":"agi",
      "attack_type":"Ranged",
      "roles":[  
         "Carry",
         "Disabler",
         "Durable"
      ],
      "legs":0
   },
   {  
      "id":95,
      "name":"npc_dota_hero_troll_warlord",
      "localized_name":"Troll Warlord",
      "primary_attr":"agi",
      "attack_type":"Ranged",
      "roles":[  
         "Carry",
         "Pusher",
         "Disabler",
         "Durable"
      ],
      "legs":2
   },
   {  
      "id":96,
      "name":"npc_dota_hero_centaur",
      "localized_name":"Centaur Warrunner",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Durable",
         "Initiator",
         "Disabler",
         "Nuker",
         "Escape"
      ],
      "legs":4
   },
   {  
      "id":97,
      "name":"npc_dota_hero_magnataur",
      "localized_name":"Magnus",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Initiator",
         "Disabler",
         "Nuker",
         "Escape"
      ],
      "legs":4
   },
   {  
      "id":98,
      "name":"npc_dota_hero_shredder",
      "localized_name":"Timbersaw",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Nuker",
         "Durable",
         "Escape"
      ],
      "legs":2
   },
   {  
      "id":99,
      "name":"npc_dota_hero_bristleback",
      "localized_name":"Bristleback",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Durable",
         "Initiator",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":100,
      "name":"npc_dota_hero_tusk",
      "localized_name":"Tusk",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Initiator",
         "Disabler",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":101,
      "name":"npc_dota_hero_skywrath_mage",
      "localized_name":"Skywrath Mage",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Support",
         "Nuker",
         "Disabler"
      ],
      "legs":2
   },
   {  
      "id":102,
      "name":"npc_dota_hero_abaddon",
      "localized_name":"Abaddon",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Support",
         "Carry",
         "Durable"
      ],
      "legs":2
   },
   {  
      "id":103,
      "name":"npc_dota_hero_elder_titan",
      "localized_name":"Elder Titan",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Initiator",
         "Disabler",
         "Nuker",
         "Durable"
      ],
      "legs":2
   },
   {  
      "id":104,
      "name":"npc_dota_hero_legion_commander",
      "localized_name":"Legion Commander",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Disabler",
         "Initiator",
         "Durable",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":105,
      "name":"npc_dota_hero_techies",
      "localized_name":"Techies",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Nuker",
         "Disabler"
      ],
      "legs":6
   },
   {  
      "id":106,
      "name":"npc_dota_hero_ember_spirit",
      "localized_name":"Ember Spirit",
      "primary_attr":"agi",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Escape",
         "Nuker",
         "Disabler",
         "Initiator"
      ],
      "legs":2
   },
   {  
      "id":107,
      "name":"npc_dota_hero_earth_spirit",
      "localized_name":"Earth Spirit",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Nuker",
         "Escape",
         "Disabler",
         "Initiator",
         "Durable"
      ],
      "legs":2
   },
   {  
      "id":108,
      "name":"npc_dota_hero_abyssal_underlord",
      "localized_name":"Underlord",
      "primary_attr":"str",
      "attack_type":"Melee",
      "roles":[  
         "Support",
         "Nuker",
         "Disabler",
         "Durable",
         "Escape"
      ],
      "legs":2
   },
   {  
      "id":109,
      "name":"npc_dota_hero_terrorblade",
      "localized_name":"Terrorblade",
      "primary_attr":"agi",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Pusher",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":110,
      "name":"npc_dota_hero_phoenix",
      "localized_name":"Phoenix",
      "primary_attr":"str",
      "attack_type":"Ranged",
      "roles":[  
         "Support",
         "Nuker",
         "Initiator",
         "Escape",
         "Disabler"
      ],
      "legs":2
   },
   {  
      "id":111,
      "name":"npc_dota_hero_oracle",
      "localized_name":"Oracle",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Support",
         "Nuker",
         "Disabler",
         "Escape"
      ],
      "legs":2
   },
   {  
      "id":112,
      "name":"npc_dota_hero_winter_wyvern",
      "localized_name":"Winter Wyvern",
      "primary_attr":"int",
      "attack_type":"Ranged",
      "roles":[  
         "Support",
         "Disabler",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":113,
      "name":"npc_dota_hero_arc_warden",
      "localized_name":"Arc Warden",
      "primary_attr":"agi",
      "attack_type":"Ranged",
      "roles":[  
         "Carry",
         "Escape",
         "Nuker"
      ],
      "legs":2
   },
   {  
      "id":114,
      "name":"npc_dota_hero_monkey_king",
      "localized_name":"Monkey King",
      "primary_attr":"agi",
      "attack_type":"Melee",
      "roles":[  
         "Carry",
         "Escape",
         "Disabler",
         "Initiator"
      ],
      "legs":2
   },
   {
    "id": 119,
    "name": "npc_dota_hero_dark_willow",
    "localized_name": "Dark Willow",
    "primary_attr": "int",
    "attack_type": "Ranged",
    "roles": [
        "Support", 
        "Nuker", 
        "Disabler", 
        "Escape"
    ],
    "legs": 2
    }, 
    {
    "id": 120,
    "name": "npc_dota_hero_pangolier",
    "localized_name": "Pangolier",
    "primary_attr": "agi",
    "attack_type": "Melee",
    "roles": [
        "Carry", 
        "Nuker", 
        "Disabler", 
        "Durable", 
        "Escape", 
        "Initiator"
    ],
    "legs": 2
    }
];
// HERO END. 

// https://api.steampowered.com/IEconDOTA2_570/GetGameItems/v0001/?key=<API_KEY>&language=en_us
// ITEM START.    
items = {
    "result": {
        "items": [
            {
                "id": 1,
                "name": "item_blink",
                "cost": 2250,
                "secret_shop": 0,
                "side_shop": 1,
                "recipe": 0,
                "localized_name": "Blink Dagger"
},
            {
                "id": 2,
                "name": "item_blades_of_attack",
                "cost": 420,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Blades of Attack"
},
            {
                "id": 3,
                "name": "item_broadsword",
                "cost": 1200,
                "secret_shop": 0,
                "side_shop": 1,
                "recipe": 0,
                "localized_name": "Broadsword"
},
            {
                "id": 4,
                "name": "item_chainmail",
                "cost": 550,
                "secret_shop": 0,
                "side_shop": 1,
                "recipe": 0,
                "localized_name": "Chainmail"
},
            {
                "id": 5,
                "name": "item_claymore",
                "cost": 1400,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Claymore"
},
            {
                "id": 6,
                "name": "item_helm_of_iron_will",
                "cost": 900,
                "secret_shop": 0,
                "side_shop": 1,
                "recipe": 0,
                "localized_name": "Helm of Iron Will"
},
            {
                "id": 7,
                "name": "item_javelin",
                "cost": 1100,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Javelin"
},
            {
                "id": 8,
                "name": "item_mithril_hammer",
                "cost": 1600,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Mithril Hammer"
},
            {
                "id": 9,
                "name": "item_platemail",
                "cost": 1400,
                "secret_shop": 1,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Platemail"
},
            {
                "id": 10,
                "name": "item_quarterstaff",
                "cost": 875,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Quarterstaff"
},
            {
                "id": 11,
                "name": "item_quelling_blade",
                "cost": 200,
                "secret_shop": 0,
                "side_shop": 1,
                "recipe": 0,
                "localized_name": "Quelling Blade"
},
            {
                "id": 237,
                "name": "item_faerie_fire",
                "cost": 70,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Faerie Fire"
},
            {
                "id": 265,
                "name": "item_infused_raindrop",
                "cost": 225,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Infused Raindrops"
},
            {
                "id": 244,
                "name": "item_wind_lace",
                "cost": 250,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Wind Lace"
},
            {
                "id": 12,
                "name": "item_ring_of_protection",
                "cost": 175,
                "secret_shop": 0,
                "side_shop": 1,
                "recipe": 0,
                "localized_name": "Ring of Protection"
},
            {
                "id": 182,
                "name": "item_stout_shield",
                "cost": 200,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Stout Shield"
},
            {
                "id": 246,
                "name": "item_recipe_moon_shard",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Moon Shard"
},
            {
                "id": 247,
                "name": "item_moon_shard",
                "cost": 4000,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Moon Shard"
},
            {
                "id": 13,
                "name": "item_gauntlets",
                "cost": 135,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Gauntlets of Strength"
},
            {
                "id": 14,
                "name": "item_slippers",
                "cost": 135,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Slippers of Agility"
},
            {
                "id": 15,
                "name": "item_mantle",
                "cost": 135,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Mantle of Intelligence"
},
            {
                "id": 16,
                "name": "item_branches",
                "cost": 50,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Iron Branch"
},
            {
                "id": 17,
                "name": "item_belt_of_strength",
                "cost": 450,
                "secret_shop": 0,
                "side_shop": 1,
                "recipe": 0,
                "localized_name": "Belt of Strength"
},
            {
                "id": 18,
                "name": "item_boots_of_elves",
                "cost": 450,
                "secret_shop": 0,
                "side_shop": 1,
                "recipe": 0,
                "localized_name": "Band of Elvenskin"
},
            {
                "id": 19,
                "name": "item_robe",
                "cost": 450,
                "secret_shop": 0,
                "side_shop": 1,
                "recipe": 0,
                "localized_name": "Robe of the Magi"
},
            {
                "id": 20,
                "name": "item_circlet",
                "cost": 165,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Circlet"
},
            {
                "id": 21,
                "name": "item_ogre_axe",
                "cost": 1000,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Ogre Axe"
},
            {
                "id": 22,
                "name": "item_blade_of_alacrity",
                "cost": 1000,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Blade of Alacrity"
},
            {
                "id": 23,
                "name": "item_staff_of_wizardry",
                "cost": 1000,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Staff of Wizardry"
},
            {
                "id": 24,
                "name": "item_ultimate_orb",
                "cost": 2150,
                "secret_shop": 1,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Ultimate Orb"
},
            {
                "id": 25,
                "name": "item_gloves",
                "cost": 500,
                "secret_shop": 0,
                "side_shop": 1,
                "recipe": 0,
                "localized_name": "Gloves of Haste"
},
            {
                "id": 26,
                "name": "item_lifesteal",
                "cost": 1100,
                "secret_shop": 0,
                "side_shop": 1,
                "recipe": 0,
                "localized_name": "Morbid Mask"
},
            {
                "id": 27,
                "name": "item_ring_of_regen",
                "cost": 300,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Ring of Regen"
},
            {
                "id": 28,
                "name": "item_sobi_mask",
                "cost": 325,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Sage's Mask"
},
            {
                "id": 29,
                "name": "item_boots",
                "cost": 400,
                "secret_shop": 0,
                "side_shop": 1,
                "recipe": 0,
                "localized_name": "Boots of Speed"
},
            {
                "id": 30,
                "name": "item_gem",
                "cost": 900,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Gem of True Sight"
},
            {
                "id": 31,
                "name": "item_cloak",
                "cost": 550,
                "secret_shop": 0,
                "side_shop": 1,
                "recipe": 0,
                "localized_name": "Cloak"
},
            {
                "id": 32,
                "name": "item_talisman_of_evasion",
                "cost": 1450,
                "secret_shop": 1,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Talisman of Evasion"
},
            {
                "id": 33,
                "name": "item_cheese",
                "cost": 1000,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Cheese"
},
            {
                "id": 34,
                "name": "item_magic_stick",
                "cost": 200,
                "secret_shop": 0,
                "side_shop": 1,
                "recipe": 0,
                "localized_name": "Magic Stick"
},
            {
                "id": 35,
                "name": "item_recipe_magic_wand",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Magic Wand"
},
            {
                "id": 36,
                "name": "item_magic_wand",
                "cost": 400,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Magic Wand"
},
            {
                "id": 37,
                "name": "item_ghost",
                "cost": 1500,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Ghost Scepter"
},
            {
                "id": 38,
                "name": "item_clarity",
                "cost": 50,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Clarity"
},
            {
                "id": 216,
                "name": "item_enchanted_mango",
                "cost": 100,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Enchanted Mango"
},
            {
                "id": 39,
                "name": "item_flask",
                "cost": 110,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Healing Salve"
},
            {
                "id": 40,
                "name": "item_dust",
                "cost": 180,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Dust of Appearance"
},
            {
                "id": 41,
                "name": "item_bottle",
                "cost": 650,
                "secret_shop": 1,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Bottle"
},
            {
                "id": 42,
                "name": "item_ward_observer",
                "cost": 80,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Observer Ward"
},
            {
                "id": 43,
                "name": "item_ward_sentry",
                "cost": 100,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Sentry Ward"
},
            {
                "id": 217,
                "name": "item_recipe_ward_dispenser",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Observer and Sentry Wards"
},
            {
                "id": 218,
                "name": "item_ward_dispenser",
                "cost": 180,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Observer and Sentry Wards"
},
            {
                "id": 44,
                "name": "item_tango",
                "cost": 150,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Tango"
},
            {
                "id": 241,
                "name": "item_tango_single",
                "cost": 30,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Tango (Shared)"
},
            {
                "id": 45,
                "name": "item_courier",
                "cost": 200,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Animal Courier"
},
            {
                "id": 46,
                "name": "item_tpscroll",
                "cost": 50,
                "secret_shop": 0,
                "side_shop": 1,
                "recipe": 0,
                "localized_name": "Town Portal Scroll"
},
            {
                "id": 47,
                "name": "item_recipe_travel_boots",
                "cost": 2000,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Boots of Travel"
},
            {
                "id": 219,
                "name": "item_recipe_travel_boots_2",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Boots of Travel"
},
            {
                "id": 48,
                "name": "item_travel_boots",
                "cost": 2400,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Boots of Travel"
},
            {
                "id": 220,
                "name": "item_travel_boots_2",
                "cost": 4400,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Boots of Travel"
},
            {
                "id": 49,
                "name": "item_recipe_phase_boots",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Phase Boots"
},
            {
                "id": 50,
                "name": "item_phase_boots",
                "cost": 1240,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Phase Boots"
},
            {
                "id": 51,
                "name": "item_demon_edge",
                "cost": 2200,
                "secret_shop": 1,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Demon Edge"
},
            {
                "id": 52,
                "name": "item_eagle",
                "cost": 3200,
                "secret_shop": 1,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Eaglesong"
},
            {
                "id": 53,
                "name": "item_reaver",
                "cost": 3000,
                "secret_shop": 1,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Reaver"
},
            {
                "id": 54,
                "name": "item_relic",
                "cost": 3800,
                "secret_shop": 1,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Sacred Relic"
},
            {
                "id": 55,
                "name": "item_hyperstone",
                "cost": 2000,
                "secret_shop": 1,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Hyperstone"
},
            {
                "id": 56,
                "name": "item_ring_of_health",
                "cost": 850,
                "secret_shop": 1,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Ring of Health"
},
            {
                "id": 57,
                "name": "item_void_stone",
                "cost": 850,
                "secret_shop": 1,
                "side_shop": 1,
                "recipe": 0,
                "localized_name": "Void Stone"
},
            {
                "id": 58,
                "name": "item_mystic_staff",
                "cost": 2700,
                "secret_shop": 1,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Mystic Staff"
},
            {
                "id": 59,
                "name": "item_energy_booster",
                "cost": 900,
                "secret_shop": 1,
                "side_shop": 1,
                "recipe": 0,
                "localized_name": "Energy Booster"
},
            {
                "id": 60,
                "name": "item_point_booster",
                "cost": 1200,
                "secret_shop": 1,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Point Booster"
},
            {
                "id": 61,
                "name": "item_vitality_booster",
                "cost": 1100,
                "secret_shop": 1,
                "side_shop": 1,
                "recipe": 0,
                "localized_name": "Vitality Booster"
},
            {
                "id": 62,
                "name": "item_recipe_power_treads",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Power Treads"
},
            {
                "id": 63,
                "name": "item_power_treads",
                "cost": 1350,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Power Treads"
},
            {
                "id": 64,
                "name": "item_recipe_hand_of_midas",
                "cost": 1650,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Hand of Midas"
},
            {
                "id": 65,
                "name": "item_hand_of_midas",
                "cost": 2150,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Hand of Midas"
},
            {
                "id": 66,
                "name": "item_recipe_oblivion_staff",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Oblivion Staff"
},
            {
                "id": 67,
                "name": "item_oblivion_staff",
                "cost": 1650,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Oblivion Staff"
},
            {
                "id": 68,
                "name": "item_recipe_pers",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Perseverance"
},
            {
                "id": 69,
                "name": "item_pers",
                "cost": 1700,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Perseverance"
},
            {
                "id": 70,
                "name": "item_recipe_poor_mans_shield",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Poor Man's Shield"
},
            {
                "id": 71,
                "name": "item_poor_mans_shield",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Poor Man's Shield"
},
            {
                "id": 72,
                "name": "item_recipe_bracer",
                "cost": 165,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Bracer"
},
            {
                "id": 73,
                "name": "item_bracer",
                "cost": 465,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Bracer"
},
            {
                "id": 74,
                "name": "item_recipe_wraith_band",
                "cost": 165,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Wraith Band"
},
            {
                "id": 75,
                "name": "item_wraith_band",
                "cost": 465,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Wraith Band"
},
            {
                "id": 76,
                "name": "item_recipe_null_talisman",
                "cost": 165,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Null Talisman"
},
            {
                "id": 77,
                "name": "item_null_talisman",
                "cost": 465,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Null Talisman"
},
            {
                "id": 78,
                "name": "item_recipe_mekansm",
                "cost": 900,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Mekansm"
},
            {
                "id": 79,
                "name": "item_mekansm",
                "cost": 2350,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Mekansm"
},
            {
                "id": 80,
                "name": "item_recipe_vladmir",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Vladmir's Offering"
},
            {
                "id": 81,
                "name": "item_vladmir",
                "cost": 2250,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Vladmir's Offering"
},
            {
                "id": 85,
                "name": "item_recipe_buckler",
                "cost": 200,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Buckler"
},
            {
                "id": 86,
                "name": "item_buckler",
                "cost": 800,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Buckler"
},
            {
                "id": 87,
                "name": "item_recipe_ring_of_basilius",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Ring of Basilius"
},
            {
                "id": 88,
                "name": "item_ring_of_basilius",
                "cost": 500,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Ring of Basilius"
},
            {
                "id": 89,
                "name": "item_recipe_pipe",
                "cost": 800,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Pipe of Insight"
},
            {
                "id": 90,
                "name": "item_pipe",
                "cost": 3150,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Pipe of Insight"
},
            {
                "id": 91,
                "name": "item_recipe_urn_of_shadows",
                "cost": 310,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Urn of Shadows"
},
            {
                "id": 92,
                "name": "item_urn_of_shadows",
                "cost": 875,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Urn of Shadows"
},
            {
                "id": 93,
                "name": "item_recipe_headdress",
                "cost": 300,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Headdress"
},
            {
                "id": 94,
                "name": "item_headdress",
                "cost": 650,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Headdress"
},
            {
                "id": 95,
                "name": "item_recipe_sheepstick",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Scythe of Vyse"
},
            {
                "id": 96,
                "name": "item_sheepstick",
                "cost": 5700,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Scythe of Vyse"
},
            {
                "id": 97,
                "name": "item_recipe_orchid",
                "cost": 775,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Orchid Malevolence"
},
            {
                "id": 98,
                "name": "item_orchid",
                "cost": 4075,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Orchid Malevolence"
},
            {
                "id": 245,
                "name": "item_recipe_bloodthorn",
                "cost": 1000,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Bloodthorn"
},
            {
                "id": 250,
                "name": "item_bloodthorn",
                "cost": 7195,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Bloodthorn"
},
            {
                "id": 251,
                "name": "item_recipe_echo_sabre",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Echo Sabre"
},
            {
                "id": 252,
                "name": "item_echo_sabre",
                "cost": 2650,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Echo Sabre"
},
            {
                "id": 99,
                "name": "item_recipe_cyclone",
                "cost": 650,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Eul's Scepter of Divinity"
},
            {
                "id": 100,
                "name": "item_cyclone",
                "cost": 2750,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Eul's Scepter of Divinity"
},
            {
                "id": 233,
                "name": "item_recipe_aether_lens",
                "cost": 600,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Aether Lens"
},
            {
                "id": 232,
                "name": "item_aether_lens",
                "cost": 2350,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Aether Lens"
},
            {
                "id": 101,
                "name": "item_recipe_force_staff",
                "cost": 400,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Force Staff"
},
            {
                "id": 102,
                "name": "item_force_staff",
                "cost": 2250,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Force Staff"
},
            {
                "id": 262,
                "name": "item_recipe_hurricane_pike",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Hurricane Pike"
},
            {
                "id": 263,
                "name": "item_hurricane_pike",
                "cost": 4615,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Hurricane Pike"
},
            {
                "id": 103,
                "name": "item_recipe_dagon",
                "cost": 1250,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Dagon"
},
            {
                "id": 197,
                "name": "item_recipe_dagon_2",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Dagon"
},
            {
                "id": 198,
                "name": "item_recipe_dagon_3",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Dagon"
},
            {
                "id": 199,
                "name": "item_recipe_dagon_4",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Dagon"
},
            {
                "id": 200,
                "name": "item_recipe_dagon_5",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Dagon"
},
            {
                "id": 104,
                "name": "item_dagon",
                "cost": 2715,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Dagon"
},
            {
                "id": 201,
                "name": "item_dagon_2",
                "cost": 3965,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Dagon"
},
            {
                "id": 202,
                "name": "item_dagon_3",
                "cost": 5215,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Dagon"
},
            {
                "id": 203,
                "name": "item_dagon_4",
                "cost": 6465,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Dagon"
},
            {
                "id": 204,
                "name": "item_dagon_5",
                "cost": 7715,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Dagon"
},
            {
                "id": 105,
                "name": "item_recipe_necronomicon",
                "cost": 1300,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Necronomicon"
},
            {
                "id": 191,
                "name": "item_recipe_necronomicon_2",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Necronomicon"
},
            {
                "id": 192,
                "name": "item_recipe_necronomicon_3",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Necronomicon"
},
            {
                "id": 106,
                "name": "item_necronomicon",
                "cost": 2400,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Necronomicon"
},
            {
                "id": 193,
                "name": "item_necronomicon_2",
                "cost": 3700,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Necronomicon"
},
            {
                "id": 194,
                "name": "item_necronomicon_3",
                "cost": 5000,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Necronomicon"
},
            {
                "id": 107,
                "name": "item_recipe_ultimate_scepter",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Aghanim's Scepter"
},
            {
                "id": 108,
                "name": "item_ultimate_scepter",
                "cost": 4200,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Aghanim's Scepter"
},
            {
                "id": 109,
                "name": "item_recipe_refresher",
                "cost": 1800,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Refresher Orb"
},
            {
                "id": 110,
                "name": "item_refresher",
                "cost": 5200,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Refresher Orb"
},
            {
                "id": 111,
                "name": "item_recipe_assault",
                "cost": 1300,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Assault Cuirass"
},
            {
                "id": 112,
                "name": "item_assault",
                "cost": 5250,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Assault Cuirass"
},
            {
                "id": 113,
                "name": "item_recipe_heart",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Heart of Tarrasque"
},
            {
                "id": 114,
                "name": "item_heart",
                "cost": 5200,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Heart of Tarrasque"
},
            {
                "id": 115,
                "name": "item_recipe_black_king_bar",
                "cost": 1375,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Black King Bar"
},
            {
                "id": 116,
                "name": "item_black_king_bar",
                "cost": 3975,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Black King Bar"
},
            {
                "id": 117,
                "name": "item_aegis",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Aegis of the Immortal"
},
            {
                "id": 118,
                "name": "item_recipe_shivas_guard",
                "cost": 650,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Shiva's Guard"
},
            {
                "id": 119,
                "name": "item_shivas_guard",
                "cost": 4750,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Shiva's Guard"
},
            {
                "id": 120,
                "name": "item_recipe_bloodstone",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Bloodstone"
},
            {
                "id": 121,
                "name": "item_bloodstone",
                "cost": 4900,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Bloodstone"
},
            {
                "id": 122,
                "name": "item_recipe_sphere",
                "cost": 1000,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Linken's Sphere"
},
            {
                "id": 123,
                "name": "item_sphere",
                "cost": 4850,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Linken's Sphere"
},
            {
                "id": 221,
                "name": "item_recipe_lotus_orb",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Lotus Orb"
},
            {
                "id": 226,
                "name": "item_lotus_orb",
                "cost": 4000,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Lotus Orb"
},
            {
                "id": 222,
                "name": "item_recipe_meteor_hammer",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Meteor Hammer"
},
            {
                "id": 223,
                "name": "item_meteor_hammer",
                "cost": 2625,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Meteor Hammer"
},
            {
                "id": 224,
                "name": "item_recipe_nullifier",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Nullifier"
},
            {
                "id": 225,
                "name": "item_nullifier",
                "cost": 4700,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Nullifier"
},
            {
                "id": 255,
                "name": "item_recipe_combo_breaker",
                "cost": 1750,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Aeon Disk"
},
            {
                "id": 256,
                "name": "item_combo_breaker",
                "cost": 3750,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Aeon Disk"
},
            {
                "id": 258,
                "name": "item_recipe_trident",
                "cost": 500,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Kaya"
},
            {
                "id": 259,
                "name": "item_trident",
                "cost": 1950,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Kaya"
},
            {
                "id": 260,
                "name": "item_refresher_shard",
                "cost": 1000,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Refresher Shard"
},
            {
                "id": 195,
                "name": "item_recipe_spirit_vessel",
                "cost": 600,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Spirit Vessel"
},
            {
                "id": 196,
                "name": "item_spirit_vessel",
                "cost": 2825,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Spirit Vessel"
},
            {
                "id": 124,
                "name": "item_recipe_vanguard",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Vanguard"
},
            {
                "id": 125,
                "name": "item_vanguard",
                "cost": 2150,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Vanguard"
},
            {
                "id": 243,
                "name": "item_recipe_crimson_guard",
                "cost": 600,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Crimson Guard"
},
            {
                "id": 242,
                "name": "item_crimson_guard",
                "cost": 3550,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Crimson Guard"
},
            {
                "id": 126,
                "name": "item_recipe_blade_mail",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Blade Mail"
},
            {
                "id": 127,
                "name": "item_blade_mail",
                "cost": 2200,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Blade Mail"
},
            {
                "id": 128,
                "name": "item_recipe_soul_booster",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Soul Booster"
},
            {
                "id": 129,
                "name": "item_soul_booster",
                "cost": 3200,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Soul Booster"
},
            {
                "id": 130,
                "name": "item_recipe_hood_of_defiance",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Hood of Defiance"
},
            {
                "id": 131,
                "name": "item_hood_of_defiance",
                "cost": 1700,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Hood of Defiance"
},
            {
                "id": 132,
                "name": "item_recipe_rapier",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Divine Rapier"
},
            {
                "id": 133,
                "name": "item_rapier",
                "cost": 6000,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Divine Rapier"
},
            {
                "id": 134,
                "name": "item_recipe_monkey_king_bar",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Monkey King Bar"
},
            {
                "id": 135,
                "name": "item_monkey_king_bar",
                "cost": 4200,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Monkey King Bar"
},
            {
                "id": 136,
                "name": "item_recipe_radiance",
                "cost": 1350,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Radiance"
},
            {
                "id": 137,
                "name": "item_radiance",
                "cost": 5150,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Radiance"
},
            {
                "id": 138,
                "name": "item_recipe_butterfly",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Butterfly"
},
            {
                "id": 139,
                "name": "item_butterfly",
                "cost": 5525,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Butterfly"
},
            {
                "id": 140,
                "name": "item_recipe_greater_crit",
                "cost": 1000,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Daedalus"
},
            {
                "id": 141,
                "name": "item_greater_crit",
                "cost": 5320,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Daedalus"
},
            {
                "id": 142,
                "name": "item_recipe_basher",
                "cost": 1150,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Skull Basher"
},
            {
                "id": 143,
                "name": "item_basher",
                "cost": 2700,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Skull Basher"
},
            {
                "id": 144,
                "name": "item_recipe_bfury",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Battle Fury"
},
            {
                "id": 145,
                "name": "item_bfury",
                "cost": 4100,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Battle Fury"
},
            {
                "id": 146,
                "name": "item_recipe_manta",
                "cost": 900,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Manta Style"
},
            {
                "id": 147,
                "name": "item_manta",
                "cost": 5000,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Manta Style"
},
            {
                "id": 148,
                "name": "item_recipe_lesser_crit",
                "cost": 500,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Crystalys"
},
            {
                "id": 149,
                "name": "item_lesser_crit",
                "cost": 2120,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Crystalys"
},
            {
                "id": 234,
                "name": "item_recipe_dragon_lance",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Dragon Lance"
},
            {
                "id": 236,
                "name": "item_dragon_lance",
                "cost": 1900,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Dragon Lance"
},
            {
                "id": 150,
                "name": "item_recipe_armlet",
                "cost": 550,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Armlet of Mordiggian"
},
            {
                "id": 151,
                "name": "item_armlet",
                "cost": 2370,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Armlet of Mordiggian"
},
            {
                "id": 183,
                "name": "item_recipe_invis_sword",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Shadow Blade"
},
            {
                "id": 152,
                "name": "item_invis_sword",
                "cost": 2700,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Shadow Blade"
},
            {
                "id": 248,
                "name": "item_recipe_silver_edge",
                "cost": 700,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Silver Edge"
},
            {
                "id": 249,
                "name": "item_silver_edge",
                "cost": 5550,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Silver Edge"
},
            {
                "id": 153,
                "name": "item_recipe_sange_and_yasha",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Sange and Yasha"
},
            {
                "id": 154,
                "name": "item_sange_and_yasha",
                "cost": 3900,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Sange and Yasha"
},
            {
                "id": 155,
                "name": "item_recipe_satanic",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Satanic"
},
            {
                "id": 156,
                "name": "item_satanic",
                "cost": 5500,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Satanic"
},
            {
                "id": 157,
                "name": "item_recipe_mjollnir",
                "cost": 900,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Mjollnir"
},
            {
                "id": 158,
                "name": "item_mjollnir",
                "cost": 5700,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Mjollnir"
},
            {
                "id": 159,
                "name": "item_recipe_skadi",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Eye of Skadi"
},
            {
                "id": 160,
                "name": "item_skadi",
                "cost": 5500,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Eye of Skadi"
},
            {
                "id": 161,
                "name": "item_recipe_sange",
                "cost": 500,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Sange"
},
            {
                "id": 162,
                "name": "item_sange",
                "cost": 1950,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Sange"
},
            {
                "id": 163,
                "name": "item_recipe_helm_of_the_dominator",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Helm of the Dominator"
},
            {
                "id": 164,
                "name": "item_helm_of_the_dominator",
                "cost": 2000,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Helm of the Dominator"
},
            {
                "id": 165,
                "name": "item_recipe_maelstrom",
                "cost": 700,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Maelstrom"
},
            {
                "id": 166,
                "name": "item_maelstrom",
                "cost": 2800,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Maelstrom"
},
            {
                "id": 167,
                "name": "item_recipe_desolator",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Desolator"
},
            {
                "id": 168,
                "name": "item_desolator",
                "cost": 3500,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Desolator"
},
            {
                "id": 169,
                "name": "item_recipe_yasha",
                "cost": 500,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Yasha"
},
            {
                "id": 170,
                "name": "item_yasha",
                "cost": 1950,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Yasha"
},
            {
                "id": 171,
                "name": "item_recipe_mask_of_madness",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Mask of Madness"
},
            {
                "id": 172,
                "name": "item_mask_of_madness",
                "cost": 1975,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Mask of Madness"
},
            {
                "id": 173,
                "name": "item_recipe_diffusal_blade",
                "cost": 700,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Diffusal Blade"
},
            {
                "id": 174,
                "name": "item_diffusal_blade",
                "cost": 3150,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Diffusal Blade"
},
            {
                "id": 175,
                "name": "item_recipe_ethereal_blade",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Ethereal Blade"
},
            {
                "id": 176,
                "name": "item_ethereal_blade",
                "cost": 4700,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Ethereal Blade"
},
            {
                "id": 177,
                "name": "item_recipe_soul_ring",
                "cost": 185,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Soul Ring"
},
            {
                "id": 178,
                "name": "item_soul_ring",
                "cost": 755,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Soul Ring"
},
            {
                "id": 179,
                "name": "item_recipe_arcane_boots",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Arcane Boots"
},
            {
                "id": 180,
                "name": "item_arcane_boots",
                "cost": 1300,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Arcane Boots"
},
            {
                "id": 228,
                "name": "item_recipe_octarine_core",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Octarine Core"
},
            {
                "id": 235,
                "name": "item_octarine_core",
                "cost": 5900,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Octarine Core"
},
            {
                "id": 181,
                "name": "item_orb_of_venom",
                "cost": 275,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Orb of Venom"
},
            {
                "id": 240,
                "name": "item_blight_stone",
                "cost": 300,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Blight Stone"
},
            {
                "id": 184,
                "name": "item_recipe_ancient_janggo",
                "cost": 575,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Drum of Endurance"
},
            {
                "id": 185,
                "name": "item_ancient_janggo",
                "cost": 1615,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Drum of Endurance"
},
            {
                "id": 186,
                "name": "item_recipe_medallion_of_courage",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Medallion of Courage"
},
            {
                "id": 187,
                "name": "item_medallion_of_courage",
                "cost": 1175,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Medallion of Courage"
},
            {
                "id": 227,
                "name": "item_recipe_solar_crest",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Solar Crest"
},
            {
                "id": 229,
                "name": "item_solar_crest",
                "cost": 2625,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Solar Crest"
},
            {
                "id": 188,
                "name": "item_smoke_of_deceit",
                "cost": 80,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Smoke of Deceit"
},
            {
                "id": 257,
                "name": "item_tome_of_knowledge",
                "cost": 150,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Tome of Knowledge"
},
            {
                "id": 189,
                "name": "item_recipe_veil_of_discord",
                "cost": 500,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Veil of Discord"
},
            {
                "id": 190,
                "name": "item_veil_of_discord",
                "cost": 2330,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Veil of Discord"
},
            {
                "id": 230,
                "name": "item_recipe_guardian_greaves",
                "cost": 1700,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Guardian Greaves"
},
            {
                "id": 231,
                "name": "item_guardian_greaves",
                "cost": 5350,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Guardian Greaves"
},
            {
                "id": 205,
                "name": "item_recipe_rod_of_atos",
                "cost": 1100,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Rod of Atos"
},
            {
                "id": 206,
                "name": "item_rod_of_atos",
                "cost": 3030,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Rod of Atos"
},
            {
                "id": 238,
                "name": "item_recipe_iron_talon",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Iron Talon Recipe"
},
            {
                "id": 239,
                "name": "item_iron_talon",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Iron Talon"
},
            {
                "id": 207,
                "name": "item_recipe_abyssal_blade",
                "cost": 1550,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Abyssal Blade"
},
            {
                "id": 208,
                "name": "item_abyssal_blade",
                "cost": 6400,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Abyssal Blade"
},
            {
                "id": 209,
                "name": "item_recipe_heavens_halberd",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Heaven's Halberd"
},
            {
                "id": 210,
                "name": "item_heavens_halberd",
                "cost": 3400,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Heaven's Halberd"
},
            {
                "id": 211,
                "name": "item_recipe_ring_of_aquila",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Ring of Aquila"
},
            {
                "id": 212,
                "name": "item_ring_of_aquila",
                "cost": 965,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Ring of Aquila"
},
            {
                "id": 213,
                "name": "item_recipe_tranquil_boots",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Tranquil Boots"
},
            {
                "id": 214,
                "name": "item_tranquil_boots",
                "cost": 950,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Tranquil Boots"
},
            {
                "id": 215,
                "name": "item_shadow_amulet",
                "cost": 1300,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Shadow Amulet"
},
            {
                "id": 253,
                "name": "item_recipe_glimmer_cape",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 1,
                "localized_name": "Recipe: Glimmer Cape"
},
            {
                "id": 254,
                "name": "item_glimmer_cape",
                "cost": 1850,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "Glimmer Cape"
},
            {
                "id": 1021,
                "name": "item_river_painter",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "River Vial: Chrome"
},
            {
                "id": 1022,
                "name": "item_river_painter2",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "River Vial: Dry"
},
            {
                "id": 1023,
                "name": "item_river_painter3",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "River Vial: Slime"
},
            {
                "id": 1024,
                "name": "item_river_painter4",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "River Vial: Oil"
},
            {
                "id": 1025,
                "name": "item_river_painter5",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "River Vial: Electrified"
},
            {
                "id": 1026,
                "name": "item_river_painter6",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "River Vial: Potion"
},
            {
                "id": 1027,
                "name": "item_river_painter7",
                "cost": 0,
                "secret_shop": 0,
                "side_shop": 0,
                "recipe": 0,
                "localized_name": "River Vial: Blood"
}
],
        "status": 200
    }
};
// ITEM END.  

game_modes = [
            {  
                "id":0,
                "name":"Unknown"
            },
            {  
                "id":1,
                "name":"All pick"
            },
            {  
                "id":2,
                "name":"Captains mode"
            },
            {  
                "id":3,
                "name":"Random draft"
            },
            {  
                "id":4,
                "name":"Single draft"
            },
            {  
                "id":5,
                "name":"All random"
            },
            {  
                "id":6,
                "name":"Intro"
            },
            {  
                "id":7,
                "name":"The Diretide"
            },
            {  
                "id":8,
                "name":"Reverse captains mode"
            },
            {  
                "id":9,
                "name":"Greevilling"
            },
            {  
                "id":10,
                "name":"Tutoral"
            },
            {  
                "id":11,
                "name":"Mid only"
            },
            {  
                "id":12,
                "name":"Least played"
            },
            {  
                "id":13,
                "name":"New player pool"
            },
            {  
                "id":14,
                "name":"Compendium matchmaking"
            },
            {  
                "id":15,
                "name":"Custom"
            },
            {  
                "id":16,
                "name":"Captains draft"
            },
            {  
                "id":17,
                "name":"Balanced draft"
            },
            {  
                "id":18,
                "name":"Ability draft"
            },
            {  
                "id":19,
                "name":"Event"
            },
            {  
                "id":20,
                "name":"All random deathmatch"
            },
            {  
                "id":21,
                "name":"1 vs. 1 solo mid"
            },
            {  
                "id":22,
                "name":"Ranked all pick"
            },
            {  
                "id":23,
                "name":"Turbo mode"
            }
        ];

skill_level = [
            {  
                "id":0,
                "name":"Any"
            },
            {  
                "id":1,
                "name":"Normal skill"
            },
            {  
                "id":2,
                "name":"High skill"
            },
            {  
                "id":3,
                "name":"Very high skill"
            }
    ];
