# ບົດທີ່ 2 ການນຳໃຊ້ Events

# 1 jquery events 

+ mouse Event 
  + click ເຫດການຈະກິດຂື້ນເມື່ອ ມີການຄຮິກ element ທີ່ເລືອກ  
  + dblclick ເຫດການຈະກິດຂື້ນເມື່ອ ມີການດັບເບີ້ນຄຮິກ element ທີ່ເລືອກ  
  + mouseenter ເຫດການຈະເກິດຂື້ນ ເມື່ອມີການເລື່ອນເມົ້າໄປຢູ່ທີ່ element ທີເລືອກ
  + mousehover ເຫດການຈະເກິດຂື້ນ ເມື່ອມີການເລື່ອນເມົ້າໄປຢູ່ element ທີ່ເລືອກ 
  + moseover ເຫດການຈະເກິດຂື້ນ ເມື່ອມີການເອົາເມົ້າເລື່ອນໄປຢູ່ element ທີເລືອກ
  + mouseseleave ເຫດການຈະເິກິດຂື້ນ ເມື່ອເອົາເມົ້າອອກຈາກ element ທີ່ເລື່ອກ
  
    <br>

+ actioin affects events 
  + hide ເຊື່ອງ / ຊ້ອນ 
  + show ສະແດງ
  + toggle ເຊື່ອງ ແລະ ສະແດງ
  + slideUp ເລື່ອນຂື້ນ
  + slideDown ເລື່ອນລົງ
  + sidetoggle  ເລື່ອນຂື້ນແລ້ວເລື່ອນລົງ 
  + fadeIn  ຄ່ອຍໆສະແດງອອກມາ 
  + fadeOut  ຄ່ອຍໆຫາຍໄປຊ້າໆ
  + fadeTo  ຄ່ອຍໆຫາຍໄປ ແລະ ຄ່ອຍໆກັບມາ 
  + fadetoggle  ຄ່ອຍໆສະແດງ ແລະ ຄ່ອຍໆຫາຍໄປ
  
  <br>

+ keyboard events
  
  + keypress ໝາຍເຖີງຫາກການທີ່ເກິດຂື້ນ ເມື່ອມີການກົດປຸ່ມໃນ keyboard ຍົກເວັ້ນປຸ່ມທີ່ເປັນ key ຕ່າງໆຂອງ keyboard ເຊັ້ນ : alt , ctrl , shift
  + keydown ໝາຍເຖີງເຫດການຈະເກິດຂື້ນ ເມື່ອມີການກົດປຸ່ມໃນ keyboard 
  + keyup ໝາຍເຖີງເຫດການຈະເກິດຂື້ນ ເມື່ອມີການປ່ອຍປຸ່ມທີ່ກົດໃນ keyborad

<br>

+ ວິທີການນຳໃຊ້ events
  <br>
  + ຮູບແບບການນຳໃຊ້ events 
 
```java
$(function(){
    $('selector').ຊື່ events ທີ່ຕ້ອງການ(function(){
        // ເຫດການທີ່ຈະເຫິດຂື້ນ
    });
});
```
<br>

## ຕົວຢ່າງ 1 

1 ເຮົາມີຂໍ້ມູນດັ່ງນີ້ : 
 <br>

    <p class = 'a'>ຄິກຄັ້ງດຽວ</p>
    <p class = 'b'>ຄິກສອງຄັ້ງ</p>
    <button type = 'button' class = 'btn_a'>click</button>
    <button type = 'button' class = 'btn_b'>dblclick</button>

+ ຈົ່ງຂຽນ jquery ດັ່ງນີ້ :
  + ເມື່ອກົດໃສ່ປຸ່ມ click ແລ້ວໃຫ້ຄຳສັ່ງ ຄິກຄັ້ງດຽວ ນັ້ນຫາຍໄປ ແລະ ຄິກໃສ່ອີກຄັ້ງທີ່ 2 ໃຫ້ກັບມາສະແດງຜົນຄືເກົ່າ
  + ເມື່ອກົດດັບເບີ້ນຄິກໃສ່ ຄຳວ່າ dblclick ແລ້ວໃຫ້ຄຳວ່າ ຄິກ 2 ຄັ້ງ ນັ້ນຫາຍໄປ ແລະ ເມື່ອກົດບັບເບີ້ນຄິກ ອີກຄັ້ງ ໃຫ້ມັນກັບມາສະແດງຜົນຄືເກົ່າ
### ຄຳສັ່ງທີ່ໃຊ້ :​
```java

```