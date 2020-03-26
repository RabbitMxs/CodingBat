<?php
class Table{
    var $flag=true;
    function showRow($colum1,$colum2){
        if ($this->flag) {
            echo '<tr style="text-align: center;">
                    <th scope="row">'.$colum1.'</th>
                    <th>'.$colum2.'</th>
                </tr>';
        }else{
            echo '<tr class="table-secondary" style="text-align: center;">
                    <th scope="row">'.$colum1.'</th>
                    <th>'.$colum2.'</th>
                </tr>';
        }
        $this->flag=!$this->flag;
    }

    function showSquirrel(){
        $this->showRow("squirrelPlay(70,false)","True");
        $this->showRow("squirrelPlay(95,false)","False");
        $this->showRow("squirrelPlay(95,true)","True");
        $this->showRow("squirrelPlay(90,false)","True");
        $this->showRow("squirrelPlay(90,true)","True");
        $this->showRow("squirrelPlay(50,false)","False");
        $this->showRow("squirrelPlay(50,true)","False");
        $this->showRow("squirrelPlay(100,false)","False");
        $this->showRow("squirrelPlay(100,true)","True");
        $this->showRow("squirrelPlay(105,true)","False");
        $this->showRow("squirrelPlay(59,false)","False");
        $this->showRow("squirrelPlay(59,true)","False");
        $this->showRow("squirrelPlay(70,false)","True");
    }

    function showBlock(){
        $this->showRow("maxBlock('hoooo00000000laa')",8);
        $this->showRow("maxBlock('hoola')",2);
        $this->showRow("maxBlock(' ')",0);
        $this->showRow("maxBlock('xyz  ')",1);
        $this->showRow("maxBlock('xxyz  ')",2);
        $this->showRow("maxBlock('xyzz  ')",2);
        $this->showRow("maxBlock('abbbcbbbxbbbx')",3);
        $this->showRow("maxBlock('XXBBBbbxx')",3);
        $this->showRow("maxBlock('XXBBBBbbxx')",4);
        $this->showRow("maxBlock('XXBBBbbxxXXXX')",4);
        $this->showRow("maxBlock('XX2222BBBbbXX2222')",4);
    }

    function showEvenly(){
        $this->showRow("evenlySpaced(2,4,6)","True");
        $this->showRow("evenlySpaced(4,6,2)","True");
        $this->showRow("evenlySpaced(4,6,3)","False");
        $this->showRow("evenlySpaced(6,2,4)","True");
        $this->showRow("evenlySpaced(6,2,8)","False");
        $this->showRow("evenlySpaced(2,2,2)","True");
        $this->showRow("evenlySpaced(2,2,3)","False");
        $this->showRow("evenlySpaced(9,10,11)","True");
        $this->showRow("evenlySpaced(10,9,11)","True");
        $this->showRow("evenlySpaced(10,9,9)","False");
        $this->showRow("evenlySpaced(2,4,4)","False");
        $this->showRow("evenlySpaced(2,2,4)","False");
        $this->showRow("evenlySpaced(3,6,12)","False");
        $this->showRow("evenlySpaced(12,3,6)","False");
    }

    function showClumps(){
        $this->showRow("CountClumps([1,2,2,3,4,4])",2);
        $this->showRow("CountClumps([1,1,2,1,1])",2);
        $this->showRow("CountClumps([1,1,1,1,1])",1);
        $this->showRow("CountClumps([1,2,3])",0);
        $this->showRow("CountClumps([2,2,1,1,1,2,1,1,2,2])",4);
        $this->showRow("CountClumps([0,0,2,2,1,1,1,2,1,1,2,2])",5);
        $this->showRow("CountClumps([])",0);
    }

    function showSwap(){
        $this->showRow("AllSwap('ax','bx','cx','ay','cy','aaa','abb')","ay bx cx ax cy aaa abb ");
        $this->showRow("AllSwap('list','of','words','swim','over','lily','water','wait')","lily of words swim over list water wait");
        $this->showRow("AllSwap('4','8','15','16','23','42')","42 8 15 16 23 4 ");
        $this->showRow("AllSwap()","");
    }
}
$table=new Table();
?>