<?php // $Id: datetime.php 19 2010-08-03 01:24:09Z jeremy $
defined('_JEXEC') or die('Restricted access');

jimport('joomla.form.formfield');

class JFormFieldTemplateCustom extends JFormField
{
	protected $type = 'templatecustom';

	protected function getInput()
	{
		$doc = JFactory::getDocument();
		$html = '';
		
		$html .= '<div class="container-fluid well" style="clear:both;">
	<div class="row-fluid">
		<div class="span12" style="text-align:center;line-height:30px">
			<h4>Blue</h4>
			<div class="span2" style="background-color: #263138;color:white;">
				Color 1
			</div>
			<div class="span2" style="background-color: #151D21; color:white">
				Color 2
			</div>
			<div class="span2" style="background-color: #E23122;color:white">
				Color 3
			</div>
			<div class="span2" style="background-color: #394F92; color:white;">
				Color 4
			</div>
			<div class="span2" style="background-color: #D9DB0B;">
				Color 5
			</div>
			<div class="span2" style="background-color: #ffffff;">
				Color 6
			</div>
		</div>
		<br style="clear:both;">
		<h4 style="text-align: center;">Brown</h4>
		<div class="span12" style="text-align:center;line-height:30px;">
			<div class="span2" style="background-color: #263138;color:white;">
				Color 1
			</div>
			<div class="span2" style="background-color: #151D21; color:white">
				Color 2
			</div>
			<div class="span2" style="background-color: #F34A3E;">
				Color 3
			</div>
			<div class="span2" style="background-color: #CCB49C;">
				Color 4
			</div>
			<div class="span2" style="background-color: #E2952B;">
				Color 5
			</div>
			<div class="span2" style="background-color: #ffffff;">
				Color 6
			</div>
		</div>
		<br style="clear:both;">
		<h4 style="text-align: center;">Gray</h4>
		<div class="span12" style="text-align:center;line-height:30px;color:white;">
			<div class="span2" style="background-color: #263138;color:white;">
				Color 1
			</div>
			<div class="span2" style="background-color: #151D21; color:white">
				Color 2
			</div>
			<div class="span2" style="background-color: #00B3FF;">
				Color 3
			</div>
			<div class="span2" style="background-color: #BCC2C8;">
				Color 4
			</div>
			<div class="span2" style="background-color: #919597;">
				Color 5
			</div>
			<div class="span2" style="background-color: #ffffff;color:#000000">
				Color 6
			</div>
		</div>
		<br style="clear:both;">
		<h4 style="text-align: center;">Green</h4>
		<div class="span12" style="text-align:center;line-height:30px;">
			<div class="span2" style="background-color: #263138;color:white;">
				Color 1
			</div>
			<div class="span2" style="background-color: #151D21; color:white">
				Color 2
			</div>
			<div class="span2" style="background-color: #15ACE6;">
				Color 3
			</div>
			<div class="span2" style="background-color: #D1E751;">
				Color 4
			</div>
			<div class="span2" style="background-color: #7ECFF1;">
				Color 5
			</div>
			<div class="span2" style="background-color: #ffffff;">
				Color 6
			</div>
		</div>
		<br style="clear:both;">
		<h4 style="text-align: center;">Mint</h4>
		<div class="span12" style="text-align:center;line-height:30px;">
			<div class="span2" style="background-color: #263138;color:white;">
				Color 1
			</div>
			<div class="span2" style="background-color: #151D21; color:white">
				Color 2
			</div>
			<div class="span2" style="background-color: #005587;color:white;">
				Color 3
			</div>
			<div class="span2" style="background-color: #ABEE95;">
				Color 4
			</div>
			<div class="span2" style="background-color: #353351;color:white">
				Color 5
			</div>
			<div class="span2" style="background-color: #ffffff;">
				Color 6
			</div>
		</div>
		<br style="clear:both;">
		<h4 style="text-align: center;">Salmon</h4>
		<div class="span12" style="text-align:center;line-height:30px;color:white;">
			<div class="span2" style="background-color: #263138;color:white;">
				Color 1
			</div>
			<div class="span2" style="background-color: #151D21; color:white">
				Color 2
			</div>
			<div class="span2" style="background-color: #E17D56;">
				Color 3
			</div>
			<div class="span2" style="background-color: #D33544;">
				Color 4
			</div>
			<div class="span2" style="background-color: #6B6D7A;">
				Color 5
			</div>
			<div class="span2" style="background-color: #ffffff;color:#000000">
				Color 6
			</div>
		</div>
		<br style="clear:both;">
		<h4 style="text-align: center;">Turquoise</h4>
		<div class="span12" style="text-align:center;line-height:30px">
			<div class="span2" style="background-color: #263138;color:white;">
				Color 1
			</div>
			<div class="span2" style="background-color: #151D21; color:white">
				Color 2
			</div>
			<div class="span2" style="background-color: #FFAB00;color:white;">
				Color 3
			</div>
			<div class="span2" style="background-color: #2AB5A5;">
				Color 4
			</div>
			<div class="span2" style="background-color: #FFE500;">
				Color 5
			</div>
			<div class="span2" style="background-color: #ffffff;">
				Color 6
			</div>
		</div>
	</div>
</div>';
			
		$html .= '<input type="hidden" name="'.$this->name.'" id="'.$this->name.'" value="'.$this->value.'" />';
		
		return $html;
	}
}
