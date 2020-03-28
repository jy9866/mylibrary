<style>

.tabContainer {
	margin:10px 0;
	width:470px;
}

#tabContent {
	padding:10px;
	background-color:#fff;
	overflow:hidden;
	float:left;
	margin-bottom:10px;
	border:1px solid #e1e1e1;
	width:100%;
}

table.table1 {
  border-collapse: collapse;
  width: 100%;
}

td{
  border-bottom: 1px solid #ddd;
}
.column {
  float: left;
  padding: 20px;
}

.column.side {
  width: 20%;
	background-color: #FFFFFF;
}

.column.middle {
  width: 60%;
}

@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

</style>

@extends('layout.front')

@section('title','HomePage')


@section('content')
<div id="tabContent" style="background-color:#E6E6FA">
<table>
<tbody>
<tr>
<td height="61">
	<form>
        <div>
					<input id="ebscohostsearchtext" name="ebscohostsearchtext" type="text" size="50" style="font-size:15pt;padding-left:5px;margin-left:0px;">
					<input type="submit" value="Search" style="font-size:15pt;padding-left:5px;">

				<div id="guidedFieldSelectors">
					<input class="radio" type="radio" name="searchFieldSelector" id="guidedField_0" value="" checked="checked">
					<label class="label" for="guidedField_0"><font color="#001177"> Keyword</font></label>
					<input class="radio" type="radio" name="searchFieldSelector" id="guidedField_1" value="TI">
					<label class="label" for="guidedField_1"><font color="#001177"> Title</font></label>
					<input class="radio" type="radio" name="searchFieldSelector" id="guidedField_2" value="AU">
					<label class="label" for="guidedField_2"><font color="#001177"> Author</font></label>
					<input class="radio" type="radio" name="searchFieldSelector" id="guidedField_2" value="PU">
					<label class="label" for="guidedField_2"><font color="#001177"> Publisher</font></label>
				</div>
		   </div>
	 </form>
</td>
</tr>
</tbody>
</table>
<div>

<div class="row">
  <div class="column side">
    <h2>Operation Hour</h2>
		<p></p>
		<p></p>
  	<h3>Monday ~ Friday : </h3>
		<p>8.00 a.m. - 6.00 p.m.</p>
		<p></p>
		<h3>Saturday & Sunday : </h3>
		<p>8.30 a.m. - 7.00 p.m.</p>
		<p></p>
		<h3>Public Holidays : </h3>
		<p>Closed </p>
		<p></p>
  </div>

<div class="column middle">
	@include('includes.imageSlider')
</div>

<div class="column side">
	<h2>Announcements</h2>
	<p></p>
	<table class ="table1">
  	<tr>
    	<td>Dear Library Users, please be informed that the library will be closed on 1st May 2020 in conjuction with the Labour Day.</td>
  	</tr>
		<tr>
		<td style = "background-color:#FFFFFF"></td>
  	</tr>
		<tr>
    	<td style = "font-size:20;background-color:#FFFFFF;font-style:italic">The Library wishes all users A Happy Labour Day</td>
  	</tr>
	</table>
	</div>
</div>
</div>
</div>

@endsection
