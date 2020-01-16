@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Material Dashboard')])

@section('content')
    <div class="container" style="height: auto;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-login card-hidden mb-3">
                    <div class="card-header card-header-primary text-center">
                        <h4>Zadanie</h4>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h3>Obecne informacie :</h3>
                        <ul>
                            <li>Ak su pre riesitela zadania [1,2] jednoduche a vie podobny scope funkcionality
                                demonstrovat na niecom vlastnom, staci odovzdat zadania: [3,4,5]
                            </li>
                            <li>Minimalne je ale potrebne odovzdat zadania [1,2]</li>
                            <li>Zadania sa mozu riesit na blade sablonach alebo formou REST API s vue.js (alebo ine)
                            </li>
                            <li>Pri zadani c.1 sa moze riesitel rozhodnut ci bude riesit zadanie ajaxom (B) alebo nie
                                (A)
                            </li>
                            <li>Flash spravy, ich existenciu a obsah (hlasky pri uzivatelskych akciach) ponechavame
                                cisto na riesitela.
                            </li>
                        </ul>
                        <blockquote><p>Kazde jednotlive zadanie (jeho funkcny vysledok) musi byt v gite otagovane
                                patricnou verziou. Cize pre zadanie c.1 bude vysledok otagovany verziou 0.1, pre zadanie
                                c.2 bude tag 0.2 atd.</p></blockquote>
                        <h4><u>Laravel zadanie c.1</u></h4>
                        <p>Vytvorit jednoduchu aplikaciu s 2 controllermi a modelmi, dalej uz len popis pozadovanej
                            funkcionality.</p>
                        <p>Je potrebne administracne rozhranie pre spravu knih. V menu bude dostupne pod zalozkou s
                            nazvom "Books" rozhranie pre listing a administraciu danych poloziek "knih". Dalej bude
                            dostupne tlacitko "ADD", na ktore ked uzivatel klikne stane sa:
                        <ul style="list-style: none">
                            <li><strong>A)</strong> Stranka sa presmeruje na formular pre vytvorenie noveho zaznamu
                                "knihy"
                            </li>
                            <li><strong>B)</strong> Otvori sa modal okno s formularom pre vytvorenie a po ulozeni sa
                                stranka AJAXOM
                                refreshne
                            </li>
                        </ul>
                        </p>
                        <p>
                            Pri kliknutu na nazov alebo kliknuti na akciu UPDATE, sa uzivatelovi objavi taktiez formular
                            s moznostou editacie bud podla bodu <strong>A)</strong> alebo <strong>B)</strong>.
                            Dalej bude dostupna moznost mazania zaznamu knihy pri kliknuti na akciu DELETE.</p>
                        <p> Taktiez je potrebne implementovat strankovanie, kde na jednu stranku sa bude vypisovat [N]
                            zaznamov. Hodnota [N] bude konfigurovatelna podla .env premennej s nazvom "BOOKS_PER_PAGE"
                            (integer).
                        </p>
                        <h4><u>Laravel zadanie c.2</u></h4>
                        <p>Aplikaciu je potrebne doplnit o dalsiu funkcionalitu a to pridanie zanru , do ktoreho kniha
                            patri.</p>
                        <p>V menu bude dostupa nova zalozka pod nazvom "Genre", kde bude podobne rozhranie na spravu
                            zanrov – rovnako ako ste vytvorili pre spravu knih.
                            Nasledujucim krokom bude potrebne prepojit zanre s knihami a to sposobom, ze kniha moze mat
                            len jeden zaner a zaner moze byt priradeny k viacerym kniham, tzn. Kardinalita 1:N.</p>
                            <strong>Postup</strong> :
                            <ol>
                            <li>Vytvorit CRUD administraciu pre zanre podla vzoru zadania c.1 (Formu nechavame
                                na riesitelovi)
                            </li>
                            <li>Do listingu zanrov do tabulky pridat stlpec "Pocet knih", kde sa zobrazi pocet knih
                                daneho zanru
                            </li>
                            <li>Do tabulky/datagridu knih zo zadania c.1 pridat stlpec "Zaner", ktory bude niest
                                hodnotu k akemu zanru je kniha priradena (nazov) a samozrejme doplnit vyber prislusneho
                                zanru aj v kroku vytvarania a updatovania knihy. Tento udaj bude povinny a mal by pri
                                jeho vybere fungovat autocomplete.
                            </li>
                        </ol>
                        <h4><u>Laravel zadanie c.3</u></h4>
                        <p>Vytvorit middleware, ktory bude suplovat funkciu "monitoringu".</p>
                        <ol>
                            <li>Vytvorit klasicky laravel midleware, na ktory sa napoja vsetky routy aplikacie</li>
                            <li>Middleware bude kontrolovat, ci aplikacia nehodila exception, respektive niekde
                                nevratila chybovy stav (50x) errory
                            </li>
                            <li>Ak middleware nejaku chybu zachyti, zaloguje ju a posle email na emailovu adresu z
                                configuracie (.env premennej)
                            </li>
                            <li>Vytvorit routu /simulate/error, kde tato routa bud vyhodi exception alebo
                                nasimuluje iny druh erroru (aby sa to dalo otestovat)
                            </li>
                        </ol>
                        <h4><u>Laravel zadanie c.4</u></h4>
                        <p>
                            Vytvorit jednoduchy bash script, ktory spusti vsetky prikazy potrebne k rozbehnutiu projektu
                            priamo z Git repozitara a naseeduje databazu nejakymi dummy datami.
                        </p>
                        <h4><u>Laravel zadanie c.5</u></h4>
                        <p>Databazu nevytvarat cez laravel migracie, ale rucne cez DDL prikazy, spolu aj s referencnymi
                            integritami. Ukazat na par zaznamoch aj pouzitie DML prikazov na naplnenie databazy.</p>
                        <h4><strong>Riesitelova pridana hodnota</strong> :</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
