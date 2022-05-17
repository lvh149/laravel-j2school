# Phân tích trang web quản lý lịch hẹn chăm sóc sức khoẻ

1. Đối tượng sử dụng:
-   Quản trị viên
-   Bác sĩ
-   Khách hàng

2. Chức năng từng đối tượng:
    A. Quản trị viên:
-   Quản lý thông tin khách hàng
-   Quản lý thông tin bác sĩ
-   Quản lý lịch làm việc của bác sĩ
-   Xét duyệt lịch hẹn (kiểm tra thông tin lịch hẹn, xét duyệt lịch hẹn)
-   Cấp quyền
-   Tạo khung giờ cho mỗi cuộc hẹn theo ngày (7h-8h, 8h-9h,…)
    B. Bác sĩ:
-   Xem lịch làm việc, lịch hẹn với khách hàng (thông tin của khách hàng, thời gian,..)
    C. Khách hàng:
-   Chỉnh sửa thông tin cá nhân
-   Đặt lịch hẹn khám sức khoẻ ( khám cái gì, ngày giờ khám)
-   Xem lịch hẹn đã đặt
-   Đánh giá sau khi khám

3. Phân tích chức năng:

-   Đặt lịch hẹn khám sức khoẻ

| Các tác nhân | Người dùng                           |
| ------------ | ------------------------------------ |
| Mô tả        | Đặt lịch hẹn khám sức khoẻ           |
| Kích hoạt    | Người dùng ấn vào nút “Đặt lịch hẹn” |
| Đầu vào      | Tên người khám bệnh<br> Giới tính<br> Số điện thoại<br> Năm sinh<br> Địa chỉ<br> Tiền sử bệnh tật<br> Lý do khám<br> Thời gian khám<br> Hình thức thanh toán (trực tuyến hoặc tại nơi khám)|
| Trình tự xử lý| 1.Hiển thị form đặt lịch hẹn<br> 2. Lấy thông tin từ form, kiểm tra không được để trống<br> 3. Trống: Hiển thị lỗi và yêu cầu người dùng nhập đầy đủ<br> 4. Kiểm tra thông tin<br> - Đúng: Form được gửi đi thành công<br> - Sai: Hiển thị lỗi<br>|
| Đầu ra | Đúng: Hiển thị thông báo thành công<br>Sai: Báo lỗi và hiển thị thông báo thất bại |
| Lưu ý | Kiểm tra ô nhập không được để trống bằng Javascript |
