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

.column {
  float: left;
  padding: 10px;
}

/* Left and right column */
.column.side {
  width: 25%;
border: 1px solid black;

}

/* Middle column */
.column.middle {
  width: 50%;

}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
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

<div id="tabContent" style="background-color:#FFFFFF; border:solid 2px #FFFFFF">

<table>
<tbody>
  <tr>
<td height="61">

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

				</div>

		</div>
	</form>


</td>
</tr>
</tbody></table>
</div>
<div class="row">
  <div class="column side">
    <h2>Side</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
  </div>

  <div class="column middle">
    <h2>Main Content</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
  </div>

  <div class="column side">
    <h2>Side</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
  </div>
</div>

<p></p>






@endsection
