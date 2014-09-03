var BL = {};

BL.manage = {
    textShortDetail: function () {
        var a = 'สบู่แครอทนาโนหน้าใส(ม๊ากก><) เพื่อผิวขาวใส พร้อมลดปัญหาหน้ามัน เหมาะสำหรับคนผิวมันและผิวแห้ง';
        var b = a.substring(0, 70);

    },
    removeListBox: function () {
        $(".remove_this").click(function () {
            $(this).parent().remove();
            return false;
        });
    }
};