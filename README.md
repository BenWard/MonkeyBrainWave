# MonkeySee

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

* 4th Street
* Adams Point
* Alamo Square
* Anza Vista
* Apparel City
* Aquatic Park / Ft. Mason
* Ashbury Heights
* Bayview
* Bernal Heights
* Bret Harte
* Buena Vista
* Castro
* Cathedral Hill
* Cayuga
* Central Waterfront
* Chinatown
* Civic Center
* Clarendon Heights
* Cleveland Heights
* Cole Valley
* Coliseum
* Coliseum Industrial
* Corona Heights
* Cow Hollow
* Crocker Amazon
* Diamond Heights
* Dogpatch
* Dolores Heights
* Downtown
* Downtown / Union Square
* Duboce Triangle
* Embarcadero
* Eureka Valley
* Excelsior
* Fairmount
* Financial District
* Fishermans Wharf
* Glen Park
* Golden Gate Park
* Haight Ashbury
* Hayes Valley
* Holly Park
* Hunters Point
* India Basin
* Ingleside
* Ingleside Terraces
* Inner Richmond
* Inner Sunset
* Ironworks District
* Ivy Hill
* Japantown
* La Lengua
* Laguna Honda
* Lake Street
* Lakeside
* Laurel Heights / Jordan Park
* Lone Mountain
* Lower Haight
* Lower Nob Hill
* Lower Pacific Heights
* Marina
* Maxwell Park
* Midtown Terrace
* Mint Hill
* Miraloma Park
* Mission
* Mission Bay
* Mission Dolores
* Mission Terrace
* Monterey Heights
* Mt. Davidson Manor
* Nob Hill
* Noe Valley
* North Beach
* North Kennedy Tract
* Northern Waterfront
* Northwest Berkeley
* Oak Center
* Oakland Ave-Harrison Street
* Oceanview
* Outer Mission
* Outer Richmond
* Outer-outer Richmond
* Oyster Point
* Pacific Heights
* Panhandle
* Parnassus Heights
* Peralta Heights
* Polk Gulch
* Portola
* Potrero Hill
* Prescott
* Presidio Heights
* Presidio Terrace
* Produce Market
* Produce and Waterfront
* Rincon Hill
* Rockridge
* Russian Hill
* Seacliff
* Sherwood Forest
* Showplace Square
* Silver Terrace
* South
* South Beach
* South of Market
* St. Marys Park
* Sunnyside
* Telegraph Hill
* Temescal
* Tenderloin
* Treasure Island
* Union Street
* University Mound
* Upper Market
* Visitacion Valley
* West Berkeley
* West Oakland
* Western Addition
* Westwood Highlands
* Westwood Park
