
<h1> Les domaines universitaires </h1>
<ul>
    @foreach($domaines as $domaine)
        <li>{{$domaine->domaineuniversite_libelle}}</li>
    @endforeach
</ul>
<a href="ajout_domaines">Ajouter un domaine</a>
