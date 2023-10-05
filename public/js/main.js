$(function () {
  $(".edit").on("click", function () {
    $("#modal").html("ubah");
    $(".bbh").attr("action", "http://localhost/ecomers/public/mahasiswa/ubah");
    const id = $(this).data("id");
    $.ajax({
      url: "http://localhost/ecomers/public/mahasiswa/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#nama").val(data.nama);
        $("#kota").val(data.kota);
        $("#email").val(data.email);
        $("#jurusan").val(data.jurusan);
        $("#id").val(data.id);
      },
    });
  });
});
