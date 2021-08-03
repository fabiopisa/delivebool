<?php

use App\Meal;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* for ($i=0; $i < 10; $i++) {
            $new_meal= new Meal();
            $new_meal->name='name ' . ($i+1);
            $new_meal->description='Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis asperiores corporis, temporibus dolores amet eius voluptatum illum natus ducimus quidem omnis reprehenderit nam voluptate error fugiat voluptas laudantium unde consectetur? Description plate number ' . ($i+1);
            $new_meal->price= ($i+1);
            $new_meal->img= 'https://via.placeholder.com/150';
            $new_meal->available= rand(0,1);
            $new_meal->save();
        } */
        DB::table('meals')->insert([
            'restaurant_id'=>4,
            'name'=>'Lasagne',
            'description'=>'Le lasagne al forno, o lasagne con ragù alla bolognese, sono uno dei più noti e gustosi piatti di pasta della cucina italiana. La ricetta classica delle lasagne al forno è facile da realizzare e prevede l’uso di pasta all’uovo fatta in casa, ragù di carne, besciamella e parmigiano grattugiato in abbondanza.',
            'price'=>12.30,
            'img'=>'https://www.buttalapasta.it/wp-content/uploads/2020/03/lasagne-al-forno.jpg',
            'available'=>rand(0,1),
        ]);
        DB::table('meals')->insert([
            'restaurant_id'=>2,
            'name'=>'Tagliatelle ai funghi',
            'description'=>'Semplici e gustose: è il binomio che caratterizza le tagliatelle ai funghi. Un gran primo piatto, dalla bontà proverbiale, che si prepara in meno di mezz\'ora. Con i funghi porcini o con un delizioso misto di bosco, le tagliatelle ai funghi sono una ricetta classica e imperdibile della cucina d\'autunno',
            'price'=>8.15,
            'img'=>'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2009/11/ricetta-tagliatelle-funghi/jcr:content/header-par/image_single.img10.jpg/1571659959909.jpg',
            'available'=>rand(0,1),
        ]);
        DB::table('meals')->insert([
            'restaurant_id'=>2,
            'name'=>'Risotto alla Milanese',
            'description'=>'Il risotto alla milanese è insieme alla cotoletta alla milanese e al panettone, il piatto più tipico e conosciuto di Milano[2]. Si tratta di un risotto i cui ingredienti principali, oltre a quelli necessari per preparare un risotto in bianco, sono lo zafferano, dal quale deriva il suo caratteristico colore giallo, e il midollo di bue. Può essere servito anche come contorno dell\'ossobuco, altro piatto tipico milanese',
            'price'=>6.25,
            'img'=>'https://www.conad.it/content/dam/conad/conad-consumer/ricette/DayOne%20Ricette/S&D/S&D_RisottoMilanese.jpg',
            'available'=>rand(0,1),
        ]);
        DB::table('meals')->insert([
            'restaurant_id'=>1,
            'name'=>'Pennette al Salmone',
            'description'=>'Le mezze penne al salmone sono un primo piatto invitante e appetitoso, ideale per ogni tipo di dieta dal momento che è piuttosto ipocalorico. Un piatto di mare che si prepara con grande facilità e che è davvero delizioso, non soltanto d’estate. Con il salmone, poi, potete preparare anche una squisita pasta fredda.',
            'price'=>15.99,
            'img'=>'https://wips.plug.it/cips/buonissimo.org/cms/2013/03/penne-salmone.jpg',
            'available'=>rand(0,1),
        ]);
        DB::table('meals')->insert([
            'restaurant_id'=>5,
            'name'=>'Bistecca Fiorentina',
            'description'=>'La bistecca “alla fiorentina”, o semplicemente fiorentina, è un secondo piatto iconico toscano, conosciuto in tutta Italia e fuori dai confini nazionali. La sua forma a T, l’immancabile osso e lo spessore importante ne hanno decretato il successo e la gloria. È un’istituzione, il metro di paragone per chi si diletta con il barbecue',
            'price'=>22.57,
            'img'=>'https://www.ilgiornaledelcibo.it/wp-content/uploads/2008/02/Untitled-design9.jpg',
            'available'=>rand(0,1),
        ]);
        DB::table('meals')->insert([
            'restaurant_id'=>3,
            'name'=>'Hamburger',
            'description'=>'Il segreto per farli strepitosi? Per ottenere un hamburger succoso e saporito: la carne tritata deve essere di buona qualità e non troppo magra, un po’ di grasso li renderà morbidi e succulenti, poi deve essere aromatizzata e infine, per evitare rotture durante la cottura dovrete aggiungere anche un uovo e un po’ di pan grattato',
            'price'=>5.39,
            'img'=>'https://www.buttalapasta.it/wp-content/uploads/2016/01/hamburger-di-carne-americano.jpg',
            'available'=>rand(0,1),
        ]);
        DB::table('meals')->insert([
            'restaurant_id'=>1,
            'name'=>'Margherita',
            'description'=>'La pizza margherita non è solo il gusto più ordinato in pizzeria, ma anche l’unica che ci permette di assaporare appieno la sua bontà. Possiamo definirla la pizza originale, una delle prime a essere state servite e ormai conosciamo tutti la storia del suo nome, indissolubilmente legato a quello della Regina Margherita',
            'price'=>4.59,
            'img'=>'https://primochef.it/wp-content/uploads/2019/08/SH_pizza_fatta_in_casa-1200x800.jpg',
            'available'=>rand(0,1),
        ]);
        DB::table('meals')->insert([
            'restaurant_id'=>1,
            'name'=>'Diavola',
            'description'=>'Distribuiabo sulla pasta la polpa di pomodoro, le fettine di salame piccante poi tagliamo a dadini la mozzarella e ricopriamo il tutto, sala, ancora peperoncino piccante a piacere, quindi infornare',
            'price'=>6.59,
            'img'=>'https://www.petitchef.it/imgupl/recipe/pizza-alla-diavola--455636p707855.jpg',
            'available'=>rand(0,1),
        ]);
        DB::table('meals')->insert([
            'restaurant_id'=>3,
            'name'=>'cheeseburger',
            'description'=>'Gustosissime fette di bacon, doppio burger di carne di manzo 100% cotta alla griglia, la salsa ketchup, un tocco di senape, formaggio fuso filante e cetriolini succosi ',
            'price'=>12.39,
            'img'=>'https://selforder.astenpos.it/casalady/wp-content/uploads/2020/03/triple_mustard_bacon_cheese_burger800x800.jpg',
            'available'=>rand(0,1),
        ]);
        DB::table('meals')->insert([
            'restaurant_id'=>1,
            'name'=>'Cacio e Pepe',
            'description'=>'Gli spaghetti cacio e pepe, sono diventati oramai piatti simbolo dell\'italianità, del mangiar bene con ingredienti DOP e legati alle tradizioni dei territori in cui sono nate. Un\'eccellenza che dalle "tovaglie a quadretti" arriva nelle cucine dei grandi Chef',
            'price'=>12.39,
            'img'=>'https://www.giallozafferano.it/images/ricette/219/21989/foto_hd/hd650x433_wm.jpg',
            'available'=>rand(0,1),
        ]);
    }
}
