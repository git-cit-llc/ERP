<!--checkbox actions-->
@include('pages.projects.components.actions.checkbox-actions')

<!--main table view-->
@include('pages.projects.components.table.table')
<!--filter-->
@if(auth()->user()->is_team)
@include('pages.projects.components.misc.filter-projects')
@endif
<!--filter-->