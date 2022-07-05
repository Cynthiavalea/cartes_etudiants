@component('mail::message')
<!-- ![logo univbobo]({{ secure_asset('images/univbobo.png')}}) -->
### Bonjour Cher etudiant !

Votre Enregistrement pour la creation de carte a ete bien pris en compte.
Veuillez passer le demain a 9h10mn pour la recuperation de votre carte.

@component('mail::button', ['url' => 'mailto:kidchris960@gmail.com'])
Confirmer sa disponibilite !
@endcomponent

Merci Bien, Rendez-vous tres bientot!<br>
{{ config('app.name') }}
@endcomponent
