<?php

use App\Models\Etudiant;
use Illuminate\Support\Facades\Route;


// Premiere Méthode
// Route::get('/', function () {
//     $jours = ["Lundi", "Mardi", "Mercredi","Jeudi", "Vendredi"];
//     return view('base')->with("jours", $jours);
// });

// Route::get('/about', function () {
//     return view('pages/about')
//     ->with("prenom", "Modou")
//     ->with('nom', "Sarr");
// });


// Deuxieme Méthode
// Route::get('/about', function () {
//     return view('pages/about')
//     ->withPrenom("Gnoror")
//     ->withNom("Sarr");
// });


// Troisime Méthode
// Route::get('/about', function () {
//     return view('pages/about')
//     ->with([
//         'prenom' => "Modou",
//         'nom' => "Sarr"
//     ]);
// });


// Quatrime Méthode
// Route::get('/about', function () {
//     $tab = [
//         'prenom' => 'Modou',
//         'nom' => "Sarr"
//     ];
//     $nomComplet = "Issa pouye";
//     return view('pages/about', compact('tab', 'nomComplet'));
// });


// Cinquieme Méthode
// Route::get('/about', function () {
//     $view = view('pages/about');
//     $view->nom = "Sarr";
//     $view->prenom = "Fatou";
//     $view->adresse= "Pikine";

//     return $view;
// });

Route::view('/about', 'pages/about');
Route::view('/contact', 'pages/contact');
Route::view('/service', 'pages/service');
Route::resource('/etudiant', EtudiantController::class);

Route::get('/', function () {
    // 🌴🌴🌴 Apprendre SQL Brute 🌴🌴🌴
    // Séléctionner la liste des articles
    // $articles = DB::select('select * from articles');

    // Séléctionner le premier article
    // $article = DB::select('select * from articles')[0];
    // dd($article);

    // Séléctionner le premier article
    // $article = DB::select('select * from articles limit 1');
    // dd($article);

    // A partir du 2em article, recuperer 1 articles
    // $article = DB::select('select * from articles limit 1 offset 2');
    // dd($article);

    // Inserer un article : 1ere methode
    // $ok = DB::insert("INSERT INTO articles
    // values(null, :titre, :contenu, :etat,  :date)", [
    //     'titre' => 'Titre4',
    //     'contenu' => 'Contenu4',
    //     'etat' => 1,
    //     'date' => date('Y-m-d H:i:s')
    // ]);
    // dd($ok);

    // Inserer un article : 2eme methode
    // $titre = 'Titre 5';
    // $contenu = 'Contenu 5';
    // $etat = 0;
    // $date = date('Y-m-d H:i:s');

    // $ok = DB::insert("INSERT INTO articles
    // values(null, :titre, :contenu, :etat,  :date)",
    // compact('titre', 'contenu', 'etat', 'date'));
    // dd($ok);

     // Inserer un article : 3eme methode
    // $titre = 'Titre 6';
    // $contenu = 'Contenu 6';
    // $etat = 0;
    // $date = date('Y-m-d H:i:s');

    // $ok = DB::insert("INSERT INTO articles values(
    //     null, ?, ?, ?, ?)",
    //     [$titre, $contenu, $etat, $date]
    // );
    // dd($ok);


    // Modifier le titre du deuxieme article
    // $ok = DB::update("UPDATE articles SET titre='Titre 2 modifié' WHERE id =2");
    // dd($ok);

    // Supprimer l'article dont l'id =6
    // $ok = DB::delete("DELETE from articles WHERE id =6");
    // dd($ok);


    // 🌴🌴🌴 Apprendre Fluent Query Builder 🌴🌴🌴
    // Selectionner tous les articles
    // $articles = DB::table('articles')->get('*');
    // dd($articles);

    //  // Selectionner tous les article (uniquement les colonnes id et titre)
    // $articles = DB::table('articles')->get(['contenu', 'titre']);
    // dd($articles);

    // // Selectionner le 1er article
    // $articles = DB::table('articles')->first();
    // dd($articles);

    // // // Selectionner le 1er article
    // $articles = DB::table('articles')->first()->contenu;
    // dd($articles);

    // // // Selectionner le 1er article
    // $article = DB::table('articles')->first();
    // dd($article->contenu);

    // // // Selectionner l'article qui a pour tirre "titre 2"
    // // $article = DB::table('articles')->whereId(2)->get();
    // $article = DB::table('articles')->where('id', 2)->get();
    // dd($article);

    // // // Selectionner tous les articles dont leur Id est >=2
    // $article = DB::table('articles')->where('id', '<>', 2)->get();
    // dd($article);

    // // // Selectionner l'article dont le titre est "Titre 2"
    // et le contenu "Contenu 2" (1er methodes)
    // $article = DB::table('articles')
    // ->whereTitreAndContenu('Titre 2', 'Contenu 2')->get();
    // dd($article);

    // // // // Selectionner l'article dont le titre est "Titre 2"
    // // // et le contenu "Contenu 2" (2em methodes)
    // $article = DB::table('articles')
    // ->where('titre', 'Titre 2')
    // ->where('contenu', 'Contenu 2')->get();
    // dd($article);

    // // // Selectionner l'article dont le titre est "Titre 2"
    // et le contenu "Contenu 2" (1er methodes)
    // $article = DB::table('articles')
    // ->whereTitreOrContenu('Titre 2', 'Contenu 2')->get();
    // dd($article);

    // // // // Selectionner l'article dont le titre est "Titre 2"
    // // // ou le contenu "Contenu 2" (2em methodes)
    // $article = DB::table('articles')
    // ->where('titre', 'Titre 2')
    // ->orwhere('contenu', 'Contenu 2')->get();
    // dd($article);

    // // // // Selectionner 2 articles 
    // $article = DB::table('articles')->take(2)->get();
    // dd($article);

    // // // // A partir du 2em articles, Selectionner 3 article
    // $article = DB::table('articles')->where('id', '>', '2')
    // ->take(3)->get();
    // dd($article);

    // // // electionner tous les articles en faisant un trie ascendant sur le titre
    // $article = DB::table('articles')->orderBy('titre', 'asc')->get();
    // $article = DB::table('articles')->orderBy('titre', 'desc')->get();
    // dump($article);
    // dd($article);

    // Selectionner tout les article leur id = 2
    // $article = DB::table('articles')->where('titre', '2')
    // ->orderBy('titre', 'asc')->get();
    // dd($article);


    // // //  Apprendre Eloquent (ORM)
    // $etudiants = Etudiant::get();
    // dd($etudiants);

    // // //  Reccuper l'etudiants qui a id 1
    // $etudiants = Etudiant::find(1);
    // dd($etudiants);

    // // //  Reccuper le nom et prenom l'etudiant qui a id 2
    // $etudiants = Etudiant::whereid(2)->get(['nom', 'prenom']);
    // dd($etudiants);

        // // //  Reccuper le nom et prenom l'etudiant dont son prenom 
        // // est different de "Modou" et son age > 13
        // $etudiants = Etudiant::where('prenom', '!=', 'Modou')
        // ->where('age', '>', 13)
        // ->get(['nom', 'prenom']);
        // dd($etudiants);

        // //   Reccuper le nom du 1er etudinat
        // $nomPremierEtudiant = Etudiant::first()->nom;
        // dd($nomPremierEtudiant);

        // // //  Ajouter un etudiant (1er methode)
        // $etudiant = new Etudiant();
        // $etudiant->nom = "Diop
        // $etudiant->prenom = "Coumba";
        // $etudiant->matricule = "BBB258";
        // $etudiant->age = 22;
        // $ok = $etudiant->save();
        // dd($ok);

        // // //  Ajouter un etudiant (2em methode)
        // $etudiant = new Etudiant(
        //     [
        //         'nom' => "Diaw",
        //         'prenom'=> "Fama",
        //         'matricule' => "4582",
        //         'age' => 22
        //     ]
        // );
        // $ok = $etudiant->save();
        // dd($ok);

        // //  Ajouter un etudiant (2em methode)
        $etudiant = Etudiant::create(
            [
          
                'nom' => "Fall",
                'prenom'=> "Mbaye",
                'matricule' => "4582",
                'age' => 18
            ]
        );
        dd("L'etudiant" . ' ' . $etudiant->prenom . ' ' . $etudiant->nom . 
        'a ete cree avec succes !!! ');


     return view('base');
});
