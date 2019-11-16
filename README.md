# MonkeyBrainWave

A script to convert San Francisco's Monkeybrains ISP service outage info into HTTP responses for monitoring

## Usage

    https://example.com/index.php?neighborhood=Mission%20Dolores

The `neigborhood` parameter must be provided, and note it's case-sensitive to whatever is in Monkeybrains' API response (see below.)

## Responses

* `200 OK` — Monkeybrains service in the specified neighborhood is operational and within outage threshold
* `404` — The neighborhood name specified does not exist.
* `503` — Monkeybrains service in the specified neighborhood may be disrupted, or completely out.

A text message is included with errors for context.

## Available Neighborhoods

At time of writing, the following neighboards are provided in the outage data file.
This may change at any time at Monkeybrains discretion. When specifying a neighborhood,
case and punctuation must be exact.

* Mission
* Dolores Heights
* Bernal Heights
* Mission Dolores
* Noe Valley
* Potrero Hill
* Alamo Square
* Peralta Heights
* Haight Ashbury
* Duboce Triangle
* La Lengua
* Lower Haight
* Hayes Valley
* Eureka Valley
* Mint Hill
* Upper Market
* Western Addition
* Corona Heights
* South of Market
* Holly Park
* Dogpatch
* Downtown / Union Square
* Central Waterfront
* Buena Vista
* Castro
* Showplace Square
* Nob Hill
* Civic Center
* Bret Harte
* Fairmount
* Japantown
* Mission Bay
* Polk Gulch
* St. Marys Park
* Bayview
* Produce Market
* Clarendon Heights
* Sunnyside
* South
* Cole Valley
* Ashbury Heights
* Silver Terrace
* Panhandle
* Parnassus Heights
* Glen Park
* Portola
* Mission Terrace
* Rincon Hill
* Financial District
* Apparel City
* South Beach
* Oceanview
* Excelsior
* Lone Mountain
* Cathedral Hill
* Chinatown
* Northern Waterfront
* North Beach
* Tenderloin
* Pacific Heights
* Hunters Point
* Lower Pacific Heights
* Telegraph Hill
* Russian Hill
* Fishermans Wharf
* Anza Vista
* Miraloma Park
* Lower Nob Hill
* Cayuga
* Golden Gate Park
* Aquatic Park / Ft. Mason
* Marina
* Diamond Heights
* Presidio Heights
* Crocker Amazon
* Outer Richmond
* University Mound
* India Basin
* Union Street
* Laurel Heights / Jordan Park
* Westwood Highlands
* Downtown
* Inner Richmond
* Lake Street
* Inner Sunset
* Prescott
* Outer Mission
* Ingleside
* Seacliff
* Embarcadero
* Cow Hollow
* Outer-outer Richmond
* Mt. Davidson Manor
* Westwood Park
* Treasure Island
* Ingleside Terraces
* Midtown Terrace
* Oyster Point
* Monterey Heights
* Presidio Terrace
* Northwest Berkeley
* Produce and Waterfront
* Laguna Honda
* Ironworks District
* Coliseum Industrial
* Sherwood Forest
* Coliseum
* Adams Point
* Cleveland Heights
* Lakeside
* Temescal
* West Oakland
* Rockridge
* Oakland Ave-Harrison Street
* 4th Street
* Ivy Hill
* West Berkeley
* North Kennedy Tract
* Oak Center
* Visitacion Valley
* Maxwell Park
