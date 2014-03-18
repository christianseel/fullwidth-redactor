/*
 * Redactor-Fullwidth
 * plugin to remove padding around the Redactor editor
 *
 * @author Christian Seel - chsmedien.com
 */

if ($resource instanceof Article) return;

$modx->regClientStartupHTMLBlock('<style>
#modx-panel-resource .redactor_box {
	margin: -15px -15px -19px;
	border: none;
}
/* prevent fullwidth when using inside contenblocks or moregallery by modmore */
#modx-panel-resource #contentblocks .redactor_box,
#modx-panel-resource #mgresource-backbone .redactor_box {
    margin: 0;
    border: 1px solid #ddd;
}
#modx-panel-resource .redactor_toolbar li {
	padding: 1px 2px 3px 3px;
}
#modx-panel-resource .redactor_toolbar li.redactor_separator {
	height: 34px;
	padding: 0;
}
#modx-panel-resource .redactor_toolbar li a {
	height: 30px;
}
body #modx-panel-resource .redactor_toolbar li a.redactor_btn_styles {
	background-position: 0 3px;
}
</style>');
