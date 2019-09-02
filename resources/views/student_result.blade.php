@extends('layouts.fontend')

@section('content')




<div align="right">
<a href="#"onClick="window.print();"><img src="{{asset('assets/img/download.jpg')}}" class="icon-print" border="0" height="20" width="20"> </a> Print
</div>
<!-- style="border: 1px #295874 solid; " -->
<table width="760" border="0" align="center" cellpadding="1" cellspacing="1"class="tble">

                    <tr>
                      <td>
<table width="760" border="0" align="center" cellpadding="1" cellspacing="1" >
 <hr>


          <tr align="center">
          <td colspan="3"><img src="{{asset('adminasset/images/teacherimages/'.$profile->picture)}}" alt="nu logo" border="0" height="45" width="auto"></td>
        </tr>
        <tr align="center">
          <td colspan="3"><font size="+2">IDB School, Bangladesh</font></td>
        </tr>
        <tr align="center">
          <td colspan="3"><font size="3"><strong> {{$profile->class_id}} Year </strong></font><font color="#000000" size="3"><strong>
                      </strong></font><font size="3"><strong> Examinaiton-2015</strong></font></td>
        </tr>
        <tr align="center">
          <td colspan="3"><font size="3"><strong></strong></font></td>
        </tr>
        <tr align="center">
          <td colspan="3"> </td>
        </tr>
        <tr>
          <td colspan="2" align="right">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>

        <tr>
          <td width="178"  align="left"><strong>Student's Name </strong></td>
          <td width="10"  align="left"><strong>:</strong></td>
          <td width="392"><b>  {{$profile->first_name}} &nbsp;  {{$profile->last_name}}                 </b></td>
        </tr>


        <tr>
          <td align="left"><strong>Exam. Roll </strong></td>
          <td align="left"><strong>:</strong></td>
          <td> {{$profile->roll}} </td>
        </tr>

        <tr>
          <td align="left"><strong>Session</strong></td>
          <td align="left"><strong>:</strong></td>
          <td>  {{$profile->session_id}}  </td>
        </tr>

        <tr>
          <td align="left"><strong>CGPA</strong></td>
          <td align="left"><strong><font color="#000000">: </font></strong></td>
          <td><strong>2.97</strong> </td>
        </tr>


           <!--<tr>
          <td colspan="2" align="center"><strong><b> </b><b>out of  credit has been successfully completed</b></strong></td>
        </tr>-->
            <tr>
          <td colspan="3" align="center"></strong></td>
        </tr>



              </table>


	    <br>
    <table width="760" height="90" border="1" align="center" cellpadding="1" cellspacing="1">

        <tr align="center">
          <td colspan="4"><font color="#000000" size="3"><strong>
            {{$profile->class_id}}</strong></font></td>
        </tr>
        <tr align="center">
          <td>Title of Paper</td>
          <td>Total Marks/Credit</td>
          <td>Obtained Marks/LG</td>
        </tr>

         @forelse ($resultinfo  as $result)
                <tr>
              <td width="363" style="font-size: 14px">
            {{$result->subject_id}}          </td>
          <td width="129" align="center" style="font-size: 14px">
             {{$result->mark}}         </td>
          <td width="145" align="center" style="font-size: 14px">
             {{$result->roll}}         </td>
        </tr>
                 @empty
    <tr><td colspan="5" class="bg-danger">No Student to Found</td></tr>
@endforelse
                        <tr>
          <td height="28" colspan="4" align="center" style="font-size: 14px"><strong>Year GPA: 3.48</strong></td>
        </tr>

                <!-- <tr>
          <td colspan="2" align="right"><b>Total</b></td>
          <td align="center"><strong><font color="#000000">1000</font></strong></td>
          <td align="center"><strong><font color="#000000">2.97</font></strong></td>
        </tr> -->

              </table>


    	  </td>
          </tr>
                 <tr>
          <td colspan="3" align="right">
		  </td>
        </tr>
</table>





@endsection

