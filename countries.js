/*
	*	Original script by: Shafiul Azam
	*	Version 4.0
	*	Modified by: Luigi Balzano

	*	Description:
	*	Inserts Countries and/or lgas as Dropdown List
	*	How to Use:

		In Head section:
		----------------
		<script type= "text/javascript" src = "countries.js"></script>
		
		In Body Section:
		----------------
		Select state (with lgas):   <select id="state" name ="state"></select>
			
		Select lga: <select name ="lga" id ="lga"></select>

        Select state (without lgas):   <select id="state2" name ="state2"></select>
			
		<script language="javascript">
			populateCountries("state", "lga");
			populateCountries("state2");
		</script>

	*
	*	License: Free to copy, distribute, modify, whatever you want to.
	*	Aurthor's Website: http://bdhacker.wordpress.com
	*
*/

// Countries
var state_arr = new Array("Lagos","Oyo","Plateau");

// lgas
var s_a = new Array();
s_a[0]="";
s_a[1]="Badakhshan|Badghis|Baghlan|Balkh|Bamian|Farah|Faryab|Ghazni|Ghowr|Helmand|Herat|Jowzjan|Kabol|Kandahar|Kapisa|Konar|Kondoz|Laghman|Lowgar|Nangarhar|Nimruz|Oruzgan|Paktia|Paktika|Parvan|Samangan|Sar-e Pol|Takhar|Vardak|Zabol";
s_a[2]="Berat|Bulqize|Delvine|Devoll (Bilisht)|Diber (Peshkopi)|Durres|Elbasan|Fier|Gjirokaster|Gramsh|Has (Krume)|Kavaje|Kolonje (Erseke)|Korce|Kruje|Kucove|Kukes|Kurbin|Lezhe|Librazhd|Lushnje|Malesi e Madhe (Koplik)|Mallakaster (Ballsh)|Mat (Burrel)|Mirdite (Rreshen)|Peqin|Permet|Pogradec|Puke|Sarande|Shkoder|Skrapar (Corovode)|Tepelene|Tirane (Tirana)|Tirane (Tirana)|Tropoje (Bajram Curri)|Vlore";
s_a[3]="Adrar|Ain Defla|Ain Temouchent|Alger|Annaba|Batna|Bechar|Bejaia|Biskra|Blida|Bordj Bou Arreridj|Bouira|Boumerdes|Chlef|Constantine|Djelfa|El Bayadh|El Oued|El Tarf|Ghardaia|Guelma|Illizi|Jijel|Khenchela|Laghouat|M'Sila|Mascara|Medea|Mila|Mostaganem|Naama|Oran|Ouargla|Oum el Bouaghi|Relizane|Saida|Setif|Sidi Bel Abbes|Skikda|Souk Ahras|Tamanghasset|Tebessa|Tiaret|Tindouf|Tipaza|Tissemsilt|Tizi Ouzou|Tlemcen";


function populatelgas( stateElementId, lgaElementId ){
	
	var selectedstateIndex = document.getElementById( stateElementId ).selectedIndex;

	var lgaElement = document.getElementById( lgaElementId );
	
	lgaElement.length=0;	// Fixed by Julian Woods
	lgaElement.options[0] = new Option('Select lga','');
	lgaElement.selectedIndex = 0;
	
	var lga_arr = s_a[selectedstateIndex].split("|");
	
	for (var i=0; i<lga_arr.length; i++) {
		lgaElement.options[lgaElement.length] = new Option(lga_arr[i],lga_arr[i]);
	}
}

function populateCountries(stateElementId, lgaElementId){
	// given the id of the <select> tag as function argument, it inserts <option> tags
	var stateElement = document.getElementById(stateElementId);
	stateElement.length=0;
	stateElement.options[0] = new Option('Select state','-1');
	stateElement.selectedIndex = 0;
	for (var i=0; i<state_arr.length; i++) {
		stateElement.options[stateElement.length] = new Option(state_arr[i],state_arr[i]);
	}

	// Assigned all countries. Now assign event listener for the lgas.

	if( lgaElementId ){
		stateElement.onchange = function(){
			populatelgas( stateElementId, lgaElementId );
		};
	}
}