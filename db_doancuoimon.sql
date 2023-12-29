-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 29, 2023 lúc 02:53 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_doancuoimon`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `advance`
--

CREATE TABLE `advance` (
  `id` int(11) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `thumbnail` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `advance`
--

INSERT INTO `advance` (`id`, `tittle`, `description`, `thumbnail`) VALUES
(1, 'Có duyên mới gặp có nợ mới yêu', 'Cuốn sách vô cùng lãng mạn của Nguyễn Anh Thư', 'coduyenmoigap.jpg'),
(2, 'Thế gian này từng chút đều là anh', 'Cuốn sách ngôn tình vô cùng hấp dẫn của Nguyễn Anh Thư', 'thegian.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `id` int(11) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `quoest` varchar(255) NOT NULL,
  `contentfirst` text NOT NULL,
  `contentsecond` text NOT NULL,
  `contentthird` text NOT NULL,
  `thumbnail` varchar(45) NOT NULL,
  `thumbnailsecond` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `theloai_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`id`, `tittle`, `quoest`, `contentfirst`, `contentsecond`, `contentthird`, `thumbnail`, `thumbnailsecond`, `created_at`, `updated_at`, `theloai_id`, `user_id`) VALUES
(2, 'CÓ CÁNH CHUỒN NÀO TRÊN VAI EM KHÔNG?', 'Thành phố nhỏ yên tĩnh và xinh đẹp, hai người yêu đắm say, mỗi bình minh đều đến bờ biển ngắm mặt trời mọc, và mỗi chiều đi tiễn bóng tà dương ở bãi cát. Dường như những ai đã gặp đôi tình nhân đều nhìn theo với ánh mắt ngưỡng mộ.', 'Một ngày, sau vụ đâm xe, cô gái trọng thương im lìm nằm lại trên chiếc giường bệnh viện, mấy ngày đêm không tỉnh lại.\r\n\r\nBuổi sáng, chàng trai ngồi bên giường tuyệt vọng gọi tên người yêu đang vô tri vô giác; đêm xuống, chàng trai tới quỳ trong giáo đường nhỏ của thành phố, ngước lên thượng đế cầu xin, mắt không còn lệ để khóc than.\r\n\r\nMột tháng trôi qua, người con gái vẫn im lìm, người con trai đã tan nát trái tim từ lâu, nhưng anh vẫn cố gắng và cầu xin hy vọng. Cũng có một ngày, thượng đế động lòng.\r\n\r\nThượng đế cho chàng trai đang gắng gượng một cơ hội. Ngài hỏi: “Con có bằng lòng dùng sinh mệnh của con để đánh đổi không?” Chàng trai không chần chừ vội đáp: “Con bằng lòng”\r\n\r\nThượng đế nói: “Ta có thể cho người con yêu tỉnh dậy, nhưng con phải đánh đổi ba năm hoá chuồn chuồn, con bằng lòng không?” Không chần chừ chàng trai vội đáp: “Con bằng lòng”\r\n\r\nBuổi sáng, cánh chuồn rời Thượng đế bay vội vã tới bệnh viện, như mọi buổi sáng. Và cô gái đã tỉnh dậy!', 'Chuồn chuồn không phải người, chuồn chuồn không nghe thấy người yêu đang nói gì với vị bác sĩ đứng bên giường.\r\n\r\nKhi người con gái rời bệnh viện, cô rất buồn bã. Cô gái đi khắp nơi hỏi về người cô yêu, không ai biết anh ấy đã bỏ đi đâu.\r\n\r\nCô ấy đi tìm rất lâu, khi cánh chuồn kia không bao giờ rời cô, luôn bay lượn bên người yêu, chỉ có điều chuồn chuồn không phải là người, chuồn chuồn không biết nói. Và cánh chuồn là người yêu ở trước mắt người yêu nhưng không được nhận ra.\r\n\r\nMùa hạ đã trôi qua, mùa thu, gió lạnh thổi những chiếc lá cây lìa cành, cánh chuồn không thể không ra đi. Vì thế cánh rơi cuối cùng của chuồn chuồn là trên vai người con gái.\r\n\r\nTôi muốn dùng đôi cánh mỏng manh vuốt ve khuôn mặt em, muốn dùng môi khô hôn lên trán em, nhưng thân xác quá nhẹ mỏng của chuồn chuồn cuối cùng vẫn không bị người con gái nhận ra.\r\n\r\nChớp mắt, mùa xuân đã tới, cánh chuồn cuống cuồng bay trở lại thành phố tìm người yêu. Nhưng dáng dấp thân quen của cô đã tựa vào bên một người con trai mạnh mẽ khôi ngô, cánh chuồn đau đớn rơi xuống, rất nhanh từ lưng chừng trời.\r\n\r\nAi cũng biết sau tai nạn người con gái bệnh nghiêm trọng thế nào, chàng bác sĩ tốt và đáng yêu ra sao, tình yêu của họ đến tự nhiên như thế nào, và ai cũng biết người con gái đã vui trở lại như những ngày xưa.', 'Cánh chuồn chuồn đau tới thấu tâm can, những ngày sau, chuồn chuồn vẫn nhìn thấy chàng bác sĩ kia dắt người con gái mình yêu ra bể xem mặt trời lên, chiều xuống đến bờ biển xem tà dương, và cánh chuồn chỉ có thể thỉnh thoảng tới đậu trên vai người yêu, chuồn chuồn không thể làm gì hơn.\r\n\r\nNhững thủ thỉ đắm say, những tiếng cười hạnh phúc của người con gái làm chuồn chuồn ngạt thở.\r\n\r\nMùa hạ thứ ba, chuồn chuồn đã không còn thường đến thăm người con gái chàng yêu nữa. Vì trên vai cô ấy luôn là tay chàng bác sĩ ôm chặt, trên gương mặt cô là cái hôn tha thiết của anh ta, người con gái không có thời gian để tâm đến một cánh chuồn đau thương, cũng không còn thời gian để ngoái về quá khứ.\r\n\r\nBa năm của Thượng đế sắp chấm dứt. Trong ngày cuối, người yêu ngày xưa của chuồn chuồn bước đến trong lễ thành hôn với chàng bác sĩ.\r\n\r\nCánh chuồn chuồn lặng lẽ bay vào trong nhà thờ, đậu lên vai người mà anh yêu, chàng biết người con gái anh yêu đang quỳ trước Thượng đế và nói : “Con bằng lòng!”. Chàng thấy người bác sĩ ***g chiếc nhẫn vào tay người con gái. Họ hôn nhau say đắm ngọt ngào. Chuồn chuồn để rơi xuống đất một hạt lệ đau đớn.\r\n\r\nThượng đế hỏi: “Con đã hối hận rồi sao?” Chuồn chuồn gạt hạt lệ nói: “Con không!”\r\n\r\nThượng đế hài lòng nói: “Nếu vậy, từ ngày mai con có thể trở thành người được rồi!”\r\n\r\nChuồn chuồn soi vào hạt nước mắt nhỏ, chàng lắc đầu đáp: ” Hãy để con cứ làm chuồn chuồn suốt đời…”\r\n\r\nYêu một người không nhất định là phải có được họ. Nhưng đã có được một người thì hãy cố yêu lấy họ. Có cánh chuồn nào trên vai bạn không?', 'chuonchuon1.jpg', 'chuonchuon2.jpg', '2023-12-22', '2023-12-22', 1, 1),
(3, 'TÌNH YÊU KHÔNG PHẢI LÀ CHUYỆN PHÙ HỢP NHAU RA SAO, MÀ LÀ CHẤP NHẬN NHAU NHƯ THẾ NÀO.', 'Mỗi chúng ta đều là những cá thể đặc biệt và duy nhất. Thế nên sẽ chẳng bao giờ bạn tìm được một người hoàn toàn phù hợp với mình. Thay vì kiếm tìm sự phù hợp ở đối phương, chúng ta hãy học cách chấp nhận sự khác biệt.\r\n\r\nTiếc thay, nhiều người trong chún', 'Mỗi chúng ta đều là những cá thể đặc biệt và duy nhất. Thế nên sẽ chẳng bao giờ bạn tìm được một người hoàn toàn phù hợp với mình. Thay vì kiếm tìm sự phù hợp ở đối phương, chúng ta hãy học cách chấp nhận sự khác biệt.\r\n\r\nTiếc thay, nhiều người trong chúng ta lại đang nhầm lẫn. Chúng ta cố hết sức để chiều lòng người mình yêu, thậm chí thay đổi hoàn toàn bản thân chỉ để phù hợp với họ, nhưng lại quên mất rằng chính con người lúc xưa mới là người khiến họ yêu thương.\r\n\r\nĐôi khi, vì quá yêu ai đó mà bạn đánh mất bản thân mình. Đôi khi, vì quá cố gắng để làm hài lòng ai đó mà bạn không còn hạnh phúc với chính mình. Đôi khi, mất đi ai đó, bạn mới nhận ra rằng bấy lâu nay bạn cũng đã quên mất mình là ai.', 'Tình yêu luôn xuất phát từ bên trong, không phải sự hấp dẫn bởi hình thức bên ngoài. Đó chính là lý do tại sao bạn phải luôn là chính mình. Vì bạn sẽ không thể trao tặng cho đối phương những gì mình không có, hoặc những thứ vốn không thuộc về con người bạn.\r\n\r\nNgược lại, nếu cứ cố gắng thay đổi bản thân để cả hai có thật nhiều điểm chung, thật nhiều sự tương đồng, thì người mệt mỏi sẽ là chính bạn mà thôi. Liệu bạn có cảm thấy thoải mái và an toàn trong tình yêu ấy? Sao có thể thoải mái khi bạn cứ phải gồng mình trở thành một người khác? Sao có thể an toàn khi bạn cứ cảm thấy những gì mình làm là vẫn chưa đủ: chưa đủ tốt, chưa đủ quan tâm, chưa đủ thích hợp?\r\n\r\nTình yêu không phải là sự nỗ lực từ một phía, càng không phải là chuyện đáp ứng mọi nhu cầu của người mình yêu và đi theo con đường của riêng họ. Tình yêu phải là chuyện của hai người, ở mọi góc độ: quan tâm, thấu hiểu, sẻ chia và nỗ lực vun đắp đều phải xuất phát từ cả hai phía.', 'Tình yêu đích thực là tình yêu mà ở đó cả hai cùng trưởng thành và hoàn thiện bản thân, không phải là một người cố gắng chạy theo để làm vừa lòng đẹp ý người còn lại, càng không nên khiến bạn trở thành một người khác.\r\n\r\nTình yêu đẹp sẽ khiến bạn thoải mái và tự tin là chính mình. Bạn có thể khóc, cười, trẻ con, thậm chí làm những điều ngu ngốc trước mặt người ấy. Người yêu tốt sẽ chấp nhận con người thật của bạn, yêu bạn vì bạn là chính bạn mà thôi. Bằng không, đó chỉ là sự hấp dẫn nhất thời, không phải là tình yêu.\r\n\r\nKhi yêu, hãy luôn là chính mình. Bởi khi mất đi tình yêu, bạn sẽ không đánh mất chính mình. Bằng ngược lại, bạn sẽ không còn gì cả.\r\n\r\nHãy hòa hợp chứ đừng hòa tan. Nhớ nhé, bạn của tôi!', 'hoahop1.jpg', 'hoahop2.jpg', '2023-12-22', '2023-12-22', 2, 1),
(5, 'EM YÊU ANH!', 'Tình yêu không phải là câu thần chú vạn năng có thể giải quyết mọi vấn đề, nhưng cuộc sống không có tình yêu thì sẽ trở nên nhọc nhằn biết bao nhiêu…', 'Có thể khi đã gắn kết trái tim với một người rồi, cuối con đường ấy sẽ có những khoảnh khắc ta sẽ đối diện với cảm giác bơ vơ khi con đường ta đi chỉ còn mình ta. Chiếc giường có hơi ấm của hai người giờ bỗng trống vắng đến lạnh lẽo. Khi một người rời đi về thế giới khác, đặc biệt đối với tôi, người luôn bị ám ảnh bởi mất mát. Thế nhưng, bây giờ sống trong tình yêu ấm áp, tôi đã hiểu được, tại sao con người lại luôn chọn ở bên nhau dù cho cái kết ” đã được ấn định trước“. Là bởi vì khoảnh khắc mở mắt ra, thấy một gương mặt thân quen ở trước mặt mình. Sát ngay và từng hơi thở an yên đều đặn. Cái cảm giác khi thức dậy thấy người mình yêu đang nhìn mình và mỉm cười còn hạnh phúc gấp ngàn lần câu nói “em yêu anh”. Rồi mỉm cười anh nói với em: “Thiên thần của a ngủ ngon không”, em không trả lời mà vùi mình vào ngực anh rồi rúc vào đấy. Chính lúc ấy, dù cho anh trái tim có yếu đuối ngàn lần, có không giám đối diện với cái kết đã được ấn định, thì anh vẫn sẽ chọn đắm chìm ngàn, vạn lần nữa. Bởi vì dù cho anh có bị ngọn lửa đốt cháy ngàn vạn lần đi chăng nữa, anh vẫn không đủ dũng cảm mà rời bỏ em đi. Vì “ANH YÊU EM – THIÊN SỨ CỦA CUỘC ĐỜI ANH”\n\n ', 'Có một nhà thông thái, lúc biết mình sắp ra đi theo tổ tiên, liền gọi các con lại bên giường, chỉ vào kho sách mênh mông của mình và nói:  – Bây giờ cha tiết lộ cho các con một điều bí mật:kho sách vĩ đại của ta chính là một món quà do một vị Thánh đã ban tặng, khi Ngài thấy ta nhà nghèo mà học hành chăm chỉ. Cùng với món quà tặng vô giá đó, Ngài còn bảo: “Trong kho sách vô tận có một quyển sách quý nhất,trong quyển sách quý nhất ấy có một trang quý nhất,trong trang sách quý nhất ấy có ghi một câu thần chú. Ai đọc được câu thần chú ấy sẽ trở thành một nhà thông thái trong những nhà thông thái…  – Cuốn sách nào vậy cha? người con trai cả nhanh nhẩu hỏi.', '– Chính ta cũng muốn hỏi vị Thánh câu đó,nhưng chưa kịp thì Ngài đã biến mất.  Ngừng lại giây lát rồi người cha trút cạn sinh lực vào lời trăng trối cuối cùng:  – Cả đời ta đã cặm cụi đọc,nhưng vẫn chưa đọc được cuốn sách quý báu ấy. Đời các con còn dài, các con hãy chăm chú vào việc đọc. Ta hy vọng rằng các con sẽ may mắn hơn ta là tìm được câu thần chú linh thiêng ấy!  Nghe lời căn dặn, những người con của nhà thông thái cần mẫn đọc hết ngày này qua ngày khác. Họ đọc mãi, nhưng vì kho sách dường như là vô tận nên vẫn chưa đọc đến cuốn sách quý báu ấy. Song nhờ những kiến thức thâu lượm được qua ngày tháng, họ đã trở thành những bậc trí giả khả kính.', 'nt3.jpg', 'nt3_2.jpg', '2023-12-22', '2023-12-22', 1, 2),
(6, 'KẾT THÚC CŨNG CHÍNH LÀ ĐIỂM KHỞI ĐẦU MỚI', 'Có nhiều lúc, chính số phận an bài để cho bạn kết thúc một mối quan hệ. Đó không phải là không may mắn mà là cuộc sống đang thực sự quan tâm đến những điều không vui của bạn. Buông tay để một người ra đi cũng chính là giải thoát cho bản thân. Xét cho cùng', 'Thật sự, sau chia tay, tôi rất buồn, khóc lóc vật vã không ít. Mọi thứ như nước chảy qua kẽ tay, chưa kịp nắm bắt, tất cả đã kết thúc. Băn khoăn và vô định, như một đứa trẻ lạc mẹ. Lắm lúc, tôi chỉ muốn quay lại, chỉ muốn chạy đến với anh vào những ngày tưởng như chẳng chịu nổi mệt mỏi nữa.\r\n\r\nCó một câu nói như thế này: “Mỗi sáng tỉnh dậy, thấy lòng hết yêu có nghĩa là hết yêu”. Nhưng tôi không cho điều đấy là đúng, hoặc có thể đó là câu nói ẩn dụ điều gì đó mà thôi. Điều gì xảy ra cũng có lý do của nó. Nếu như không phải có người thứ ba, thì tình yêu có thể lụi tàn do thói quen hay do sự không đồng thuận từ lâu, gặp phải điều gì như nước tràn ly làm mọi thứ vỡ vụn trong chốc lát.', 'Thế nên, khi anh đột ngột nói câu dừng lại, tôi đã chẳng thể nào chấp nhận được điều này. Tôi đã tự dằn vặt mình, liệu mình đã sai ở đâu, liệu mình đã không làm đúng điều gì. Chẳng thể nào có chuyện, tình yêu bấy lâu nói cạn là cạn hết như thế.\r\n\r\nVậy nhưng, mặc cho tôi có chờ đợi câu trả lời thế nào, mọi hồi đáp đều rơi vào hư vô.\r\n\r\nCho đến một ngày, vô tình nghe radio, tôi bắt được câu hát: “Thank God I found the good in goodbye”. Đó như là một cái tát vào mặt tôi vậy.\r\n\r\nCâu hát nhẹ nhàng nhưng chọc đúng nỗi đau. Đúng thật, có những người trong cuộc đời, dù đau cũng phải dứt khoát buông tay. Rời xa họ chỉ mất một thời gian chông chênh, nhưng còn bên họ, ta lại mất cả cuộc đời cho bao tổn thương.\r\n\r\n', 'Có lẽ, đó là lần đầu tiên tôi tin vào duyên phận. Có nhiều lúc, chính số phận an bài để cho bạn kết thúc một mối quan hệ. Đó không phải là không may mắn mà là cuộc sống đang thực sự quan tâm đến những điều không vui của bạn.\r\n\r\nBuông tay để một người ra đi cũng chính là giải thoát cho bản thân. Xét cho cùng, chúng ta không những cần tìm được đúng người, càng cần phải học cách rời xa người không phù hợp. Rời xa đúng lúc, cũng là một điều đúng đắn, mà ta làm cho bản thân mình!', 'nt4.jpg', 'nt5.jpg', '2023-12-22', '2023-12-22', 2, 2),
(7, 'YÊU ĐƠN PHƯƠNG LÀ TÌNH CẢM NHƯ THẾ NÀO?', 'Tuy không mãnh liệt như tình yêu hai người những cũng đủ mãnh liệt và day dứt trong lòng. Tình yêu thì có nghĩa là yêu đấy! Nhưng yêu đơn phương lại là yêu chưa đủ lớn mà thích thì đã đong đầy rồi.', 'Yêu đơn phương một người là cảm giác nhung nhớ, hồi hộp, có đôi chút run và đôi chút mong chờ.\r\n\r\nYêu đơn phương một người là khi chỉ nghe thấy tiếng tin nhắn vang lên thôi là cũng nghĩ ngay đến người đó, là mỗi sớm thức dậy hay mỗi tối trước khi ngủ say hình ảnh đầu tiên xuất hiện cũng là người ta, là những cái mỉm cười bất chợt không kiểm soát.\r\n\r\nYêu đơn phương một người cũng là khi cả ngày chỉ mang cảm giác nhung nhớ trong lòng, cả ngày chỉ mang hình bóng người ta trong tim, cả ngày cứ chỉ mơ mộng và mong chờ.\r\n\r\nYêu đơn phương một người cũng là khi nghe một bản nhạc nào đó rồi bỗng dưng nghĩ về người ta, là khi ăn một cái gì đấy, làm một việc gì đấy cũng luôn muốn chia sẻ với ai đó.\r\n\r\nYêu đơn phương một người là khi tức giận khi biết người ấy nhắn tin thân mật với người khác, là bực bội khi người ấy vô tình rep tin nhắn chậm, là tủi thân khi nhìn thấy cái out bất chợt trên facebook, là những cái lo lắng mong chờ khi người ta không trả lời tin nhắn.', 'Yêu đơn phương một người còn là những cái lo lắng khi người ta bảo ốm, là những hôm nằm tủi thân khóc khi không thể bên người ta, là khi những nỗi nhớ cứ kéo dài theo dòng chảy của thời gian.\r\n\r\nYêu đơn phương một người là khi tình cảm trong lòng không dứt khoát, là cứ ngóng trông, là cứ mong chờ. Ừ thích thì là thích rồi đấy! Nhưng yêu thì cũng chưa phải.\r\n\r\nYêu đơn phương một người làm cho ta trở nên mạnh mẽ hơn, không sợ tổn thương, cũng không sợ mất mát. Lúc nào cũng chỉ muốn bao bọc và trở che cho ai đó, lúc nào cũng chỉ muốn đối phương được vui vẻ.\r\n\r\nYêu đơn phương một người, còn làm cho cuộc sống của ta trở nên màu sắc hơn, ta biết mong nhớ, biết thẫn thờ, biết mỉm cười một mình, biết hy sinh, biết tức giận, biết khóc và biết cả tủi thân.\r\n\r\nYêu đơn phương một người, sẽ làm cho ta sợ cô đơn hơn lúc nào hết, sợ bị bỏ rơi, sợ bị từ chối, sợ nhất vẫn là thấy người ta bỏ rơi mình để yêu một người khác.', 'Yêu đơn phương một người là cả ngày chỉ muốn nói chuyện với người ta, là những cảm xúc mới chớm của tình yêu, là những suy nghĩ, tưởng tượng cho tương lai.\r\n\r\nYêu đơn phương một người, vui thì cũng vui lắm, nhớ cũng nhớ nhiều lắm vì đời người, tìm thấy người mình thích, được gặp và được yêu họ đã là tuyệt vời rồi. Vậy thì, còn mong chờ gì nữa ở tình yêu đơn phương.\r\n\r\nYêu đơn phương một người là cũng tủi thân lắm, cũng buồn và day dứt lắm nhưng làm gì có ai khi yêu lại không gen tuông, lại không đau khổ và hững hờ.\r\n\r\nTình yêu đơn phương thường sẽ thú vị hơn tình yêu giữa hai người. Yêu đơn phương là học cách hoàn thiện mình để rồi giành tình cảm cho người khác. Còn tình yêu giữa hai người lại là tình yêu làm sao để cả hai cùng hoàn thiện cho tình cảm hòa hợp.\r\n\r\nThú vị có, đau khổ có, nhung nhớ có, tủi thân có. Yêu đơn phương một người chính là như vậy đấy!', 'donphuong.jpg', 'donphuong2.jpg', '2023-12-22', '2023-12-22', 2, 2),
(8, 'NHÂN LÚC CHÚNG TA CÒN CHƯA GIÀ, EM SẼ MẶC KỆ TẤT CẢ ĐỂ YÊU ANH', 'Chúng ta chỉ có một cuộc đời để sống, và phải mất bao nhiêu lần quay đầu mới gặp được nhau, vì vậy nếu có thể thì hãy yêu nhau một cách tử tế, đừng vô tâm cũng đừng lừa dối nhau.', 'Có những lúc chúng ta tưởng chừng như không thể bước cùng nhau được nữa. Anh chán những cuộc cãi vã, em mệt mỏi với những đêm khóc ướt gối, cả hai ta đều có bao áp lực phía bên ngoài mà chỉ cần im lặng là đổ vỡ. Rồi mọi thứ cũng qua đi, và em trân trọng hơn tình yêu của chúng mình.\r\n\r\nHóa ra điều tốt đẹp nhất trong cuộc đời này là em đã gặp anh vào ngày ấy, tháng ấy, năm ấy. Vì vậy, mỗi ngày em sẽ xin kệ thế giới để yêu anh.\r\n\r\nNgày hôm nay em sẽ đặt công việc lại văn phòng khi hết giờ, không mang những cau có để đi gặp anh, không check mail khi cả hai đang hẹn hò, không bàn về deadline, báo cáo.\r\nNgày hôm nay em sẽ đặt chuyện bực mình ở đâu đâu lại bên ngoài khung cửa sổ, bên trong nhà chỉ có bữa cơm ngon và anh.', 'Ngày hôm nay em sẽ bớt nũng nịu, bớt càu nhàu, bớt mít ướt để anh đỡ phải mệt mỏi dỗ dành, nhưng thi thoảng phải cho em mè nheo một chút đấy!\r\nNgày hôm nay em học cách không bỏ lỡ bởi em sợ khi quay đầu lại không còn thấy anh đứng đó. Em biết có những chuyện bỏ lỡ rồi sau này dù có muốn cũng không làm được.\r\nNgày hôm nay khi giận dỗi em sẽ không im lặng nữa, sẽ cố gắng bình tĩnh để nói chuyện với anh bởi chỉ có như thế chúng ta mới yêu nhau lâu dài được…\r\nChúng ta chỉ có một cuộc đời để sống, và phải mất bao nhiêu lần quay đầu mới gặp được nhau, vì vậy nếu có thể thì hãy yêu nhau một cách tử tế, đừng vô tâm cũng đừng lừa dối nhau.\r\nNgày hôm nay, chúng mình cứ yêu nhau đi, mặc kệ ngoài kia giông bão có thế nào. Chúng ta chỉ có một cuộc đời để sống, và phải mất bao nhiêu lần quay đầu mới gặp được nhau, vì vậy nếu có thể thì hãy yêu nhau một cách tử tế, đừng vô tâm cũng đừng lừa dối nhau.', 'Ngay từ khi quyết định bước vào cuộc đời anh, em nghĩ bản thân nhất định sẽ cùng anh làm mọi chuyện. Cùng anh gánh chịu, cùng anh đối mặt, cùng anh xông pha giải quyết mọi khó khăn, bởi khi có anh ở bên mọi chuyện chắc chắn sẽ ổn và tốt đẹp. Em luôn tin là thế, trước đây và bây giờ vẫn thế.\r\nNên là thế giới này đôi khi không dành cho chúng ta sự êm đềm và thuận lợi, thì chúng ta hãy cứ nắm tay nhau để đi đến tận cùng. Hay ngoài kia có khiến anh mệt mỏi, em sẽ là chỗ dựa để anh quay về.\r\nMà nhiều lúc chúng ta cũng buồn cười lắm, cứ muốn đẩy nhau ra thật xa, rồi mới biết được người ôm dịu dàng cũng là một loại hạnh phúc, để đau đớn, mệt nhoài được vơi bớt theo một cách nào đấy lạ kỳ.\r\nEm yêu anh, nhiều đến mức mỗi ngày đều vạch ra tất cả những dự định tương lai để cùng anh thực hiện. Những điều đó không đơn thuần chỉ là trên mặt giấy, không đơn thuần chỉ nghĩ cho vui, không đơn thuần không thể biến thành hiện thực, em chắc chắn sẽ cùng anh làm từng chút từng chút một mỗi ngày.\r\nNhân lúc mùa thu vừa đến, nhân lúc em yêu anh hơn cả, nhân lúc ánh mặt trời dịu dịu, gió thoảng nhẹ bay, nhân lúc chúng ta còn chưa già, hôm nay, ngày mai em sẽ mặc kệ tất cả để yêu anh.\r\nAnh nhớ nhé!', 'love1.jpg', 'love2.jpg', '2023-12-22', '2023-12-22', 3, 2),
(9, 'ANH THƯƠNG EM! NHIỀU HƠN 1 CHỮ THƯƠNG!!!', 'Tôi đã yêu em, nhiều hơn cả 1 tình yêu, đã thương em nhiều 1 chữ thương? Nhưng rồi cũng có được gì đâu ngoài đau khổ và nước mắt! có phải phụ nữ càng xinh đẹp, càng thông minh thì càng biết cách lừa gạt tình cảm phải không em? có phải thứ rẻ mạt nhất trên', 'Rồi hôm nay ta đứng ở 1 phía gọi quá khứ về, giờ đây ta là kẻ ngoài cuộc. Đã phải mất rất lâu để phai dần những vết cắt và mọi chuyện xảy ra ngày đó, lúc này đây ta hiểu ra rằng mọi thứ là phải diễn ra như vậy.!\r\n\r\nBây giờ em đang ở đâu? em của ngày hôm nay liệu có quên chuyện hai ta ngày đó? Mà lãng quên cũng được, vì rằng người vẫn sống tốt, tốt đến nỗi đau đớn cũng trôi mau. Tôi mừng vì tình yêu với em không phải là nỗi hận, dẫu hai con tim non nớt từng ướt đẫm những tổn thương mà mình gây cho nhau. Tôi từng tự hỏi mình gặp nhau làm chi để đổi lại chỉ toàn là đau khổ. Hôm nay tôi tự trả lời được rằng: “là để trưởng thành”.\r\n\r\nSau cuộc tình 7 năm không trọn vẹn. cô ấy đã bỏ tôi đi lấy chồng, tôi đau khổ, tôi quỵ lụy, tôi níu kéo, nhưng cũng chỉ để người ta thêm thương hại mình mà thôi, tôi đành bất lực đứng từ xa nhìn em lên xe hoa về nhà chồng!\r\n\r\nRồi cũng chẳng hiểu tại sao tôi lại ra Hà Nội, đi như 1 kẻ thẫn thờ, cũng chỉ để muốn quên đi tất cả những kỉ niệm giữa tôi và em! 4 năm qua, tôi chỉ có 1 mình, ăn 1 mình, đi 1 mình, ngủ cũng 1 mình, tôi cô độc giữa cái thủ đô tấp nập và hối hả này. Những lúc buồn, những khi vui tôi cũng chỉ có 1 mình, nhiều lúc tôi muốn có 1 ai để tâm sự, để san sẻ cũng chẳng có, tôi thấy mình trơ trọi, lạc lõng giữa dòng người qua lại!\r\n\r\nTôi sợ lắm những câu chuyện làm quen, sợ lắm những mối quan hệ mập mờ, hay nói cách khác, tôi sợ yêu, sợ rồi sẽ phải đau khổ như chính tôi của ngày xưa, tôi sợ lắm cảm giác đấy, sợ đến mức chỉ biết nằm co ro lại 1 mình giữa 4 bức tường trong những đêm vắng!\r\n\r\nRồi bỗng 1 ngày kia em lặng lẽ đến, em nói thích tôi, em chủ động tán tỉnh tôi, và cũng như định mệnh, cả 2 nói chuyện say sưa chẳng biết chán là gì? Cứ thế, ngày ngày nói chuyện, quan tâm nhau…. rồi bỗng 1 ngày tôi nhận ra là mình đã yêu em thật rồi, yêu em nhiều hơn cả dự tính! Tôi yêu 1 người chưa bao giờ tiếp xúc, thậm chí chưa bao giờ được gặp mặt, ai cũng bảo tôi ngu ngốc, khờ khạo, làm gì có kiểu tình yêu ảo thế chứ! nhưng với tôi, chỉ cần trái tim cũng chung nhịp đập, chỉ cần cùng chung hơi thở là đã yêu rồi!\r\n\r\nTất cả những tình cảm chôn dấu bấy lâu nay, tôi dành trọn vẹn cho em, tôi đem tất cả sự chân thành, và yêu thương để yêu em, chỉ mong sao sẽ có 1 tình yêu chẳng bao giờ kết thúc, chỉ mong sao sẽ có 1 happy end wedding như cả 2 mong đợi..!!', 'Nhưng có ai ngờ đâu, người tính chẳng bằng trời tính, những ngày hạnh phúc ấy cũng chẳng kéo dài được bao lâu, ông trời có lẽ như đang trêu đùa với số phận của tôi vậy, chẳng lẽ 1 lòng 1 dạ để yêu 1 người khó đến như vậy sao?\r\n\r\nMọi thứ diễn ra thật nhanh chóng, nhanh đến cả ngỡ ngàng, nhanh đến mức mà tôi cũng chẳng thể nào hiểu được nữa! em nói em phải đi, rồi cứ thế xa nhau… xa nhau thôi…!!!! Nhiều lúc tôi tự hỏi lòng mình, vì sao mọi thứ lại đến nông nỗi này, tại sao em nói yêu tôi, rồi cũng chính em lại là người bỏ rơi tôi, em cho tôi hi vọng, cho tôi niềm tin, nhưng rồi cũng chính em đã dập tắt đi niềm tin, niềm hi vọng đấy trong tôi chứ!\r\n\r\nTôi đã yêu em, nhiều hơn cả 1 tình yêu, đã thương em nhiều 1 chữ thương? Nhưng rồi cũng có được gì đâu ngoài đau khổ và nước mắt! có phải phụ nữ càng xinh đẹp, càng thông minh thì càng biết cách lừa gạt tình cảm phải không em? có phải thứ rẻ mạt nhất trên đời này chính là lời hứa của phụ nữ phải không em? tại sao lại rời bỏ tôi khi tôi cần em nhất, tại sao lại nhẫn tâm đối xử với tôi như vậy chứ!', 'Em! chắc giờ này đã có cuộc sống mới, còn tôi, tôi vẫn nơi đây chờ đợi 1 lời hứa, chờ đợi 1 lần gặp mặt nhau như đã hứa, ngày ngày, giờ giờ, tôi vẫn mong, vẫn mong được nhìn thấy em dù chỉ 1 lần, để tôi biết rằng: người tôi yêu là như vậy đó! Dù rằng đã xa nhau, nhưng tôi vẫn nhớ về em, vẫn lo lắng cho em như ngày đầu mình còn yêu nhau! có lẽ từ đây, tôi sẽ không dám yêu thêm 1 ai nữa, trái tim nhỏ bé này đã chứa đựng nhiều đau khổ, nhiều đắng cay, giờ tôi chỉ mong sao nơi đó em được bình an!\r\n\r\nHứa với tôi, phải sống thật tốt, thật đàng hoàng và tử tế biết chưa? Hứa với tôi dù có thế nào cũng phải thật vui tươi, và an yên sống đến hết cuộc đời này, có như thế tôi mới được an lòng! hãy chăm sóc cho bản thân mình thật tốt, vì em sống, là sống luôn cả phần của tôi đấy em nhé! Từ nay tôi sẽ lại là tôi của 4 năm về trước! và tôi cũng tin chắc rằng! tôi đã yêu em, nhưng chưa bao giờ tôi hối hận, ngoan nhé!hãy sỗng thật an yên và hạnh phúc!!!!', 'love3.jpg', 'love4.jpg', '2023-12-22', '2023-12-22', 3, 2),
(10, 'CÓ NHỮNG ĐOẠN ĐƯỜNG MUỐN MỘT MÌNH', 'Thỉnh thoảng, tôi lại ao ước có thể bỏ đi thật xa để làm lại tất cả từ đầu tại một nơi chẳng ai biết mình.', 'Rồi, còn có cả những lúc muốn rời khỏi những người quá quen thuộc, quá hiểu về mình để bắt đầu một mối quan hệ với ai đó chẳng thể đặt tên quá khứ của tôi.\r\n\r\nĐôi khi, ngồi giữa một bàn tiệc đông vui, đột nhiên thèm được ăn một mình.\r\n\r\nRồi, cũng có khi, ngồi trên chuyến xe đường dài, nghĩ đến trạm dừng phía trước chẳng một ai thân quen, lòng lại có cảm giác thật thanh thản.\r\n\r\nCó những đoạn đường, tôi thật sự muốn đi một mình.\r\n\r\nCó người bảo, cô đơn quá lâu, người ta sẽ tự nhiên biến nó thành một món trang sức, đeo rịn lên người như một vật sở hữu.\r\n\r\nCó lẽ vậy, những con người đã cô đơn đủ lâu đến mức cô độc, sẽ có những lúc thèm được một mình đến ghê gớm. Cứ như một sinh vật ngoài hành tinh lạc đến trái đất vồn vã và ước ao quay về với hành tinh đơn độc của mình. Xa lạ với cuộc đời như thể đã đi xa nó thật lâu.\r\n\r\nCó những ngày, tôi thật sự muốn bỏ đi, dù trong lòng vẫn luôn lưu giữ một hình bóng. Đôi khi mới đây là những phút bên nhau hạnh phúc, về nhà nhắm mắt lại, đột nhiên thèm được chẳng còn ai bên cạnh. Cái cảm giác chênh vênh, lạc lõng rồi tự mình vực mình dậy, tự động viên và an ủi chính mình, khi có thể vượt qua rồi tự nhiên thấy bản thân thật vĩ đại.', 'Chắc là “thân lừa ưa nặng”, hạnh phúc không muốn, lại thích một mình.\r\n\r\nNhiều khi công việc ngập đầu, thức đến lúc người khác tỉnh dậy vẫn không thể làm hết, rồi thầm nghĩ: “Mệt mỏi thế này, nếu không có người ấy bên cạnh để tìm chút bình yên thì thật chẳng biết làm cách nào bước tiếp”.\r\n\r\nVậy mà, cũng lại có khi lên một kế hoạch trong đầu, những bước đi cho tương lai, tự nhiên lại bảo: “Giá như không có người ấy bên cạnh, một mình sẽ đi nhanh hơn, sẽ phải rắn rỏi và quyết đoán hơn”.\r\n\r\nThỉnh thoảng, dùng nỗi đau và sự cô đơn tôi luyện bản thân cũng không phải vô nghĩa.\r\n\r\nHôm nọ, tự nhiên muốn ra ngoài, thèm hít thở khí trời, ngồi quán xá rồi chạy vòng quanh. Tại thấy trời đẹp đến thế, nắng vàng ươm, gió mát mẻ, nghĩ bụng hôm nay ngồi trò chuyện cùng bạn bè sẽ rất tuyệt. Ấy vậy mà cuối cùng chẳng gọi một ai. Cứ lang thang trên chiếc xe đã cũ, tự nhiên bật cười vì suy nghĩ: “Đồng hành cùng ta trên mọi nẻo đường không phải là một người, mà là cái xe này đây”. Xong rồi, cứ tiếp tục lang thang một mình, định bụng nếu đi qua tiệm nào mà đột nhiên thèm ăn thì sẽ ghé vào đó. Nếu đi cùng một nhóm thì làm sao có thể thế này? Đi ăn một mình thật ra cũng có cái hay, muốn ăn gì thì có thể ăn đó, chạy thật xa rồi tự nhiên thấy thèm, vòng xe lại cũng chẳng phiền ai. Ăn nửa chừng, muốn ăn món khác thì chỉ việc đi ra tính tiền, rồi lại leo lên xe mà đi tiếp. Đi một mình cũng vậy, muốn bước thật nhanh thì chỉ việc đưa chân mà chẳng cần đợi một ai, mệt mỏi muốn đứng lại một lúc cũng chẳng ai bất chấp kéo tay mình đi.\r\n\r\nĐêm nay Huế lạnh đến tê tái, nhất là với một người lạc ở xứ nóng quá lâu thì lại càng thấy lạnh hơn. Đêm về khuya, gió lại càng hung bạo, càn quét mọi ngóc ngách, chẳng để cho lòng ai được phép bình yên.\r\n\r\nCó lẽ, thấm thía cái cảm giác một mình nhất chính là khi nhìn ra ngoài cửa kính ô tô chạy tuyến đường dài để đi về một nơi xa. Lòng hoang hoải nhất là khi đứng tại bến xe nhìn người ta đưa đón nhau, lòng như chững lại.', 'Đứng co cụm trong một góc của trạm xe trong lúc đợi xe trung chuyển, nhìn ra ánh đèn đường vàng vọt lặng lẽ xiên ngang bên ngoài, tự nhiên thèm được một mình ghê gớm.\r\n\r\nThế rồi chẳng đợi xe nữa, tự buông mình vào đêm dù đã ngồi xe một chặng đường dài mệt mỏi, cứ thể cuốc bộ bằng chính đôi chân của mình, cảm nhận cái vắng lặng và thinh không của đêm. Cứ đi thôi, có gì phải sợ, một mình bước trên đôi chân của mình không phải sẽ mạnh mẽ hơn sao? Sẽ học cho mình cách vững vàng hơn sao? Và sẽ chẳng lưu luyến gì mà cứ một mạch tiến về phía trước hay sao?\r\n\r\nQuả thật, dù trong tim luôn mang vác một hình bóng, thì vẫn có những đoạn đường thật sự muốn đi một mình, và cần phải đi một mình.', 'tnghiem1.jpg', 'tnghiem2.jpg', '2023-12-22', '2023-12-22', 4, 2),
(11, 'CÓ BÌNH YÊN NÀO MÀ KHÔNG XÓT XA…', 'Cứ ngỡ như chưa bao giờ từng ngón tay đan vào nhau, cứ ngỡ lời yêu thương lúc đó chỉ là một giấc mơ ngắn ngủi. Khi ánh nắng chiếu rọi như xóa tan đi tất cả niềm hạnh phúc mơ hồ, để rồi lòng chợt lạnh lại vì sợ cái cảm giác vụt mất yêu thương', 'Khi màn đêm buông xuống, trùm lên cái bóng dáng cô độc ấy hóa ra lại là một sự ngụy trang hoàn hảo mà nó đang cần. Đường vắng lặng, chỉ còn những cây đèn đường leo lét, khi mờ khi tỏ. Cái lạnh và sự tĩnh mịch đó bao trùm nó, cứ mải miết đi mãi, ko đích đến…ko đường về…Từng vòng xe lăn bánh đưa nó đi quanh con phố thân thuộc đó, trong lòng bỗng trống rỗng đến lạ thường. Có lẽ chỉ khi đơn độc trong đêm như thế này nó mới lại là nó, trái tim lại miên man trong những cảm xúc và nỗi nhớ nào đó thật mơ hồ.\r\n\r\nTiếng nhạc không lời khe khẽ đưa nó vào một thế giới chỉ có mình nó với những vòng quay mãi, tưởng như vô tận không có điểm dừng. Khẽ trút nỗi lòng vào một tiếng thở dài, chỉ còn nó và đêm tĩnh mịch, ko còn đó nụ cười không cảm xúc, không còn đó những câu bông đùa thường nhật. Chỉ có nó trên tay cầm chiếc mặt nạ lang thang trên con phố khuya ấy, nỗi buồn có khi nào lại nhẹ tênh đến thế. Khi mà bản thân mệt nhoài vì vai diễn, nó chỉ cần những phút giây này dài mãi để là mình một cách tư nhiên nhất, không cần nói một lời, cũng không cần quay cuồng trong mớ bòng bong cuộc sống, cứ một mình tự thả mình trôi đi với đêm.', 'Hóa ra bình yên lại là lúc được thành thật với chính nó như thế, hóa ra chỉ cần thoải mái bung ra nỗi bi thương trong lòng không cần giấu giếm, không cần kìm nén mới khiến nó được sống. Đôi khi khoảnh khắc này cứ kéo dài ra mãi cũng là suy nghĩ miên man trong cái đầu nhỏ bé đấy. Bởi vì sớm mai nó lại mạnh mẽ lao vào một guồng quay trong một thế giới không dành thời gian, hạnh phúc ở lại. Có chút tủi thân đâu đó, không phải vì nó cô độc mà giữa bao người nó lại cô đơn đến khắc khoải. Muốn nắm lấy một bàn tay nhưng càng đuổi theo sự ấm áp đó lại càng thấy xa vời, càng lúc khoảng cách đó càng cách xa thêm và biến mất không chút lưu luyến.\r\n\r\nCứ ngỡ như chưa bao giờ từng ngón tay đan vào nhau, cứ ngỡ lời yêu thương lúc đó chỉ là một giấc mơ ngắn ngủi. Khi ánh nắng chiếu rọi như xóa tan đi tất cả niềm hạnh phúc mơ hồ, để rồi lòng chợt lạnh lại vì sợ cái cảm giác vụt mất yêu thương. Nó không muốn màn đêm kia được kéo lên, chỉ cần mãi thả mình đi theo cơn gió se se lạnh cũng khiến nó muốn một mình thật lâu, trạng thái êm đềm này xin đừng qua đi. Nhưng chẳng có đêm dài nào không kết thúc, nó sẽ lại mệt mỏi bước những bước thật dài nhưng vô định, không thể dừng lại mà cứ phải dẫm đạp lên sự yếu đuối của bản thân mà chạy nhanh để trốn tránh những giấc mơ không có thực.', 'Có ai biết cuộc sống mệt mỏi này sẽ đến đâu mới dừng lại, chỉ là sự luôn cố gắng tỏ ra bình thường vẫn tốt để làm yên lòng người thân, để hoàn thành trọn ven vai diễn quen thuộc của nó. Khi chẳng còn hy vọng nhỏ nhoi là có một cuộc sống bình dị nhất, nó cảm thấy sao không thể mở cành cửa đó thêm một lần nào nữa. Bởi vì niềm vui mà nó khó khăn lắm mới đón nhân được sao ngắn ngủi đến thế, dù nhượng bộ bao lần cũng không phải dành cho nó, chỉ là sự vay mượn có thời hạn mà nó đã phải đánh đổi biết bao nhiêu sự dũng cảm của tuổi thanh xuân.\r\n\r\nRồi đây khi trở lại, có bao nhiêu vết sẹo đã liền da nhưng vẫn xấu xí nằm tại đó, những bước chân càng gấp gáp khẩn trương càng dễ dàng gục ngã. Có đôi lúc nó chẳng còn muốn đứng lên, càng run rẩy trốn tránh không muốn bước thêm một bước nào nữa vì nỗi sợ đau đớn kéo dài dai dẳng kia chẳng hề phai nhòa cứ mãi đeo bám. Nó đứng lặng rất lâu, để chờ thế giới của nó kéo đến, sẽ chẳng nhìn thấy gì ngoài tấm màn đen tĩnh lặng kia, Nhưng…nó cũng không thấy sợ hãi bởi vì chỉ cần giữ sự yên bình này cho riêng nó, thế thôi cũng là đủ.\r\n\r\nMặc cho những hạt mưa bắt đầu tí tách, rơi ướt nhòa nhòa bóng dáng ấy…', 'tn3.jpg', 'tn4.jpg', '2023-12-22', '2023-12-22', 4, 2),
(13, 'ĐẾN CHẾT VẪN HÀ TIỆN', 'Ngày xửa ngày xưaxưa có anh nhà giàu, tính hà tiện, ăn chẳng dám ăn, mặc chẳng dám mặc, chỉ khư khư tích của làm giàu. Có người bạn rủ ra tỉnh chơi, anh nấn ná không đi vì sợ, đi với bạn phải đãi bạn. Bị người ta chê cười mãi, một hôm, anh vào buồng giắt ', 'Ngày xưa có anh nhà giàu, tính hà tiện, ăn chẳng dám ăn, mặc chẳng dám mặc, chỉ khư khư tích của làm giàu. Có người bạn rủ ra tỉnh chơi, anh nấn ná không đi vì sợ, đi với bạn phải đãi bạn. Bị người ta chê cười mãi, một hôm, anh vào buồng giắt một quan tiền vào lưng, rồi sai một người ở cùng đi lên tỉnh.\n\nĐến tỉnh, anh trông thấy cái gì cũng muốn mua, nhưng sợ mất tiền rồi lại thôi. Trời nắng như thiêu, anh muốn vào quán uống nước, nhưng sợ phải trả tiền cho người nhà, đành đi qua.\n\nĐến chiều trở về, khi qua đò, đến giữa dòng, anh khát quá không chịu được mới cúi xuống uống nước chẳng may lộn cổ xuống sông.', 'Anh người nhà vội kêu to lên:\n\n– Ai cứu chủ tôi, xin thưởng một quan tiền!\n\nAnh keo kiệt đương loay hoay giữa dòng, nghe tiếng, cố ngoi lên nói:\n\n– Một quan đắt lắm!\n\nAnh người nhà vội chữa lại:\n\n– Thôi thì năm tiền vậy!\n\n\n\n', 'Anh keo kiệt lại cố ngoi lên một lần nữa và chỉ kịp nói: “Năm tiền còn đắt quá!” rồi chìm nghỉm.', 'trcuoi.jpg', 'trcuoi2.jpg', '2023-12-22', '2023-12-22', 5, 2),
(14, 'SỢ VỢ', 'Tôi kể anh nghe, tối nào vợ tôi cũng quỳ rạp xuống nền nhà để nói chuyện với tôi đó', 'Ba người đàn ông ngồi tán gẫu trong một quán bar. Hai người trong số đó đang hào hứng khoe về thành tích “dạy vợ” của mình thì người còn lại chỉ ngồi trong im lặng và uống rượu.\n\nMột lúc sau, chợt nhớ ra ngừoi bạn nãy giờ ngồi im lặng, người thứ nhất vỗ vai anh chàng:\n\n– Thế nào chú em, ở nhà chắc vợ chú nghe răm rắp nhỉ?\n\n– Tôi kể anh nghe, tối nào vợ tôi cũng quỳ rạp xuống nền nhà để nói chuyện với tôi đó.', 'Nghe xong lời này, hai anh chàng há hốc mồm kinh ngạc:  –  Im im thế này mà được phết! Rồi sau đó thì sao?  – Cô ấy quỳ xuống và nói: “Bây giờ anh có chui ra ngoài gầm giường không hay để tôi vào đó lôi anh ra??', '-?!!!', 'sovo0.jpg', 'sovo_2.jpg', '2023-12-22', '2023-12-22', 5, 2),
(16, 'THẦN GIÓ VÀ MẶT TRỜI [TRUYỆN NGỤ NGÔN AESOP]', 'Thần Gió và Mặt Trời là câu chuyện ngụ ngôn ý nghĩa của Aesop, ngụ ý khuyên bảo chúng ta cần phải khéo léo khi muốn thay đổi quan điểm của người khác.', 'Sau khi gây ra thiên tai, bão táp làm đổ sập nhà cửa, cây cối, thần Gió càng lúc càng tỏ ra ngạo mạn.\r\n\r\nMột hôm, thần Gió và Mặt Trời tranh cãi xem ai là kẻ mạnh nhất. Nhìn xuống mặt đất, thấy một khách bộ hành khoác chiếc áo tơi đang đi, Mặt Trời bảo:\r\n\r\n– Chẳng cần cãi nhau làm gì. Hễ ai làm cho người khách bộ hành kia phải cởi chiếc áo ra sẽ thắng cuộc và là kẻ mạnh nhất!\r\n', 'Thần Gió bắt đầu dương oai, thổi làm cát bụi bốc lên mù mịt, cây cối đổ rạp. Những cơn cuồng phong liên tiếp nổi lên, kèm với cái lạnh buốt da, buốt thịt. Tuy nhiên, gió càng lớn chừng nào thì người bộ hành càng cố giữ chặt chiếc áo tơi của mình, làm cho thần Gió không cách nào lột được chiếc áo kia ra.', 'Đến phiên Mặt Trời, từ trong đám mây đen, Mặt Trời từ từ ló dạng. Những tia nắng vàng tỏa ra khắp nơi, làm người bộ hành cảm thấy ấm áp, thoải mái. Mặt Trời càng lúc càng nóng ấm. Thế rồi người bộ hành tự động cởi bỏ chiếc áo tơi vô dụng kia ra.', 'ngungon1.jpg', 'ngungon2.png', '2023-12-22', '2023-12-22', 6, 1),
(17, 'NGƯỜI ĐỐT THAN CỦI VÀ THỢ HỒ VẢI [TRUYỆN NGỤ NGÔN AESOP]', 'Người đốt than củi và thợ hồ vải là truyện ngụ ngôn của Aesop, nhắc nhở chúng ta phải luôn tỉnh táo, đừng vì cái lợi trước mắt mà làm hỏng lợi ích lâu dài.', 'Có một người đốt than củi tự làm việc để nuôi sống mình. Tuy nhiên, một người thợ hồ vải tình cờ đến sống ngay bên cạnh. Người đốt than đã chủ động làm quen, và nhận thấy rằng anh chàng thợ hồ vải thuộc típ người chăm chỉ, có thể hữu ích với mình. Vì thế, anh ta đề nghị anh thợ hồ đến ở chung nhà.', 'Anh ta nói:\r\n\r\n– Bằng cách này, chúng ta có thể hiểu nhau nhiều hơn. Bên cạnh đó, các chi tiêu gia đình cũng sẽ giảm đi một nửa.', 'Người thợ hồ cảm ơn và trả lời rằng:\r\n\r\n– Thưa ông, tôi không thể làm vậy. Vì mọi thứ tôi phải mất nhiều công sức mới làm trắng được sẽ bị than củi của ông làm đen đi.', 'ngungon2.jpg', 'ngungon2_2.jpg', '2023-12-22', '2023-12-22', 6, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `thumbnail1` varchar(255) NOT NULL,
  `thumbnail2` varchar(255) DEFAULT NULL,
  `content1` text NOT NULL,
  `tacgia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `thumbnail1`, `thumbnail2`, `content1`, `tacgia`) VALUES
(1, 'Bạn mới là chủ nhân của cuộc đời mình', 100000, 'bancuocdoi.jpg', 'bancuocdoi2.png', 'Trong thời đại mà mọi thứ ngày càng chóng vánh, càng có quá nhiều lựa chọn và sự “chân thành” ngày một xa xỉ, các cô gái trẻ đứng trước lằn ranh của trưởng thành đều không thể tránh khỏi những hoang mang, tự ti, tổn thương hay đổ vỡ…Tất cả đều là những bài học đắt giá mà bản thân mỗi người đều phải trải qua và tự rút ra cho riêng mình. “Bạn mới là chủ nhân của cuộc đời mình” chính là cuốn sách giúp bạn rút ngắn con đường học tập ấy lại, là kim chỉ nam để phụ nữ hiểu và yêu thương bản thân hơn, sẵn sàng ngẩng cao đầu, tự tin sống một cuộc sống mà mình mong muốn.\n\nSách gồm những bài học kinh nghiệm, những câu chuyện thật từ chính cuộc sống của tác giả Lý Ái Linh – một người phụ nữ ngoài 30 tài mạo song toàn nhưng cũng đi qua nhiều biến cố trong công việc, gia đình, tình yêu, hôn nhân…như bao phụ nữ khác. Đi từ trạng thái cố gồng mình mạnh mẽ, tỏ ra kiên cường cho đến trạng thái thả lỏng, bình thản đón nhận và tháo gỡ từng nút thắt trong cuộc sống là cả một quá trình mà bất cứ người phụ nữ nào cũng nên biết để được sống đúng với bản năng phái yếu. Không tô hồng cuộc sống, cũng không phủ bóng đen tiêu cực, “Bạn mới là chủ nhân của cuộc đời mình” sẽ cho các cô gái 20 và cả những người phụ nữ 30 thấy được hiện thực cuộc sống như nó vốn là và giúp bạn vượt qua những thử thách, tự tin làm chủ cuộc đời mình. ', 'Lý Ái Linh'),
(2, 'Chó Sủa Nhầm Cây', 105000, 'chosuanhamcay.jpg', 'chosuanhamcay2.jpg', 'Qua việc khơi gợi các mẫu chuyện: Giới cướp biển không thích đánh nhau nhiều như ta tưởng; thiếu ngủ khiến ta rơi vào trạng thái không khác say xỉn; làm từ thiện là tốt, nhưng làm từ thiện quá nhiều thì lại chẳng tốt tí nào. Tác giả cho ta một góc nhìn mới mẻ về sự thành công với ngôn ngữ dí dỏm, hài hước của mình.\n\n', 'Eric Baker'),
(3, 'Cuộc Phiêu Lưu Của Tom Sawyer', 75000, 'cuocphieuluucuatom.jpg', 'cuocphieuluucuatom2.jpg', 'Mark Twain (1835 – 1910) là nhà văn hiện thực – trào phúng Mĩ. Ông được xem là “vì tinh tú đầu tiên” của nền văn học hiện đại Mĩ và cho đến nay vẫn được coi là “ngôi sao sáng nhất” trong giới những người cầm bút trên văn đàn Mĩ. Góp phần quan trọng làm nên tên tuổi của Mark Twain phải kể đến “Những cuộc phiêu lưu của Tom Sawyer”. Cuốn truyện đã được người đọc ở nhiều lứa tuổi, nhiều dân tộc khác nhau yêu mến và nâng niu.', 'Mark Twain'),
(4, 'Đời Ngắn Đừng Ngủ Dài', 86000, 'doingandungngudai.jpg', 'doingandungngudai2.jpg', 'Cuốn sách Đời ngắn đừng ngủ dài chứa đựng nhiều câu chuyện khác nhau, nhưng điểm chung là chúng đều truyền cảm hứng và động lực cho người đọc rất thực tế, giúp chúng ta nhận ra rằng, trong cuộc sống bộn bề ngày nay, đôi khi chúng ta cũng nên dành thời gian để nghỉ ngơi và sống chậm lại, thay vì cứ cố gắng hết sức dù cho bản thân mình đã và đang rất mệt mỏi. ', 'Robin Sharma'),
(5, 'Hợp Đồng Của Quỷ', 150000, 'hopdongcuaquy.jpg', 'hopdongcuaquy2.jpg', 'Cuốn sách gồm 14 truyện ngắn thuộc thể loại ảo truyện (cách dùng từ của tác giả), với những câu chuyện khá đa dạng về giọng điệu kể chuyện, phong phú về tính cách nhân vật và gợi nhiều âm hưởng khác nhau: có truyện thống thiết và ám ảnh một nỗi đau nhức nhối; có những truyện gần với mô-típ “truyện không có truyện”… Để rồi độc giả như bị cuốn vào một cái vô hình, vô ảo nào đó ngay khi kết thúc câu chuyện bởi đó là những cái kết hoàn toàn “không có sự can thiệp của người viết”. Thế giới nhân vật trong tác phẩm khá đặc biệt, họ vừa dị thường, kỳ quái trong suy tưởng lại vừa gần gũi và rất thật trong đời sống hiện đại… Đọc Hợp Đồng Của Quỷ, bạn sẽ thấy một lát cắt của cuộc sống hiện đại ùa vào trang viết, bắt gặp một cái gì vừa quen vừa lạ, cả những cái kỳ quái nhiều khi vẫn tồn tại xung quanh ta.', 'Nguyễn Danh Lam'),
(6, 'Sẽ Có Cách Đừng Lo', 99000, 'secocachdunglo.jpg', 'secocachdunglo2.jpg', 'Cuốn sách gồm 14 truyện ngắn thuộc thể loại ảo truyện (cách dùng từ của tác giả), với những câu chuyện khá đa dạng về giọng điệu kể chuyện, phong phú về tính cách nhân vật và gợi nhiều âm hưởng khác nhau: có truyện thống thiết và ám ảnh một nỗi đau nhức nhối; có những truyện gần với mô-típ “truyện không có truyện”… Để rồi độc giả như bị cuốn vào một cái vô hình, vô ảo nào đó ngay khi kết thúc câu chuyện bởi đó là những cái kết hoàn toàn “không có sự can thiệp của người viết”. Thế giới nhân vật trong tác phẩm khá đặc biệt, họ vừa dị thường, kỳ quái trong suy tưởng lại vừa gần gũi và rất thật trong đời sống hiện đại… Đọc Hợp Đồng Của Quỷ, bạn sẽ thấy một lát cắt của cuộc sống hiện đại ùa vào trang viết, bắt gặp một cái gì vừa quen vừa lạ, cả những cái kỳ quái nhiều khi vẫn tồn tại xung quanh ta.', 'Tuệ Nghi'),
(7, 'Sức Mạnh Của Thói Quen', 45000, 'sucmanhcuathoiquen.jpg', 'sucmanhcuathoiquen2.jpg', 'Không chỉ có nhiều hoạt động tích cực trong lĩnh vực báo chí. Khi lấn sân sang lĩnh vực viết sách ông cũng gây được nhiều tiếng vang. Ngoài quyển sách thành công là Sức mạnh của thói quen, ông còn được biết đến với nhiều tác phẩm khác như: Thông minh hơn nhanh hơn giỏi hơn, The Secrets of Being Productive in Life and Business, …\r\n\r\nNói về quyển sách Sức mạnh của thói quen, bạn sẽ tìm được quy luật hình thành của một thói quen, từ những thói quen quen thuộc nhất mỗi ngày. Hiểu về nguyên tắc này, bạn hoàn toàn có thể biết được mình nên học hỏi những thói quen nào và loại bỏ những điều gì. Không chỉ là thói quen của một cá nhân, mà thói quen của một tập thể cũng được tác giả nhắc đến.\r\n\r\nNếu bạn đang muốn rèn luyện những thói quen tích cực để hướng đến thành công thì quyển sách này hoàn toàn phù hợp với bạ', 'Charles Duhigg'),
(8, 'Anh Chính Là Thanh Xuân Của Em', 69000, 'thanhxuancuaem.jpg', 'thanhxuancuaem2.jpg', '“Thanh xuân của em” là một tác phẩm hay của Hạ Vũ. Đây là cuốn sách đã miêu tả hết sự tiếc nuối thanh xuân của tác giả. Đồng thời, cũng là nỗi lòng tiếc nuối thanh xuân của biết bao con người trong chúng ta. Hạ Vũ đã nói hộ lòng người, qua mỗi tác phẩm của Hạ Vũ, bạn đọc sẽ lại thấy chính mình trong đó, thấy lại những điều đã xảy đến với mình.', 'Phạm Kiều Trang ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `code`
--

CREATE TABLE `code` (
  `id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `value` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `code`
--

INSERT INTO `code` (`id`, `code`, `name`, `value`) VALUES
(1, 'sieusale', 'Siêu Sale', 10),
(2, 'TienHoaVipPro', 'Ban than Tien Hoa', 20),
(3, 'salenuagia', 'Sale 50%', 50);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(25) NOT NULL,
  `age` int(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `numberphone` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `fullname`, `username`, `password`, `age`, `email`, `numberphone`, `address`) VALUES
(12, 'Ho Nhat Nam Khanh', 'khanh1123', '12345678@Khanh', 22, 'khanh@gmail.com', '0000000000', 'Hue'),
(13, 'Nguyen Tien Hoa', 'NguyenTienHoa', '12345678@Hoa', 19, 'nguyentienhoa946@gmail.com', '0000000000', 'Thôn1/KrongÁ/ Mdrak/DakLak'),
(14, 'Bui Duc Hoang', 'hoang04', '12345678@Hoang', 19, 'hoang@gmail.com', '0000000000', 'QB');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `numberphone` varchar(25) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `order_conttent` text NOT NULL,
  `sale` int(100) NOT NULL,
  `sumpay` int(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `fullname`, `numberphone`, `address`, `email`, `order_conttent`, `sale`, `sumpay`, `status`) VALUES
(13, 'Nguyen Tien Hoa', '0000000000', 'Thôn1/KrongÁ/ Mdrak/DakLak', 'nguyentienhoa946@gmail.com', '1. Bạn mới là chủ nhân của cuộc đời mình; Số lượng: 2; Đơn giá: 100000 VND; Thành tiền: 200000 VND    |     2. Chó Sủa Nhầm Cây; Số lượng: 1; Đơn giá: 105000 VND; Thành tiền: 105000 VND    |     3. Cuộc Phiêu Lưu Của Tom Sawyer; Số lượng: 1; Đơn giá: 75000 VND; Thành tiền: 75000 VND    |     4. Hợp Đồng Của Quỷ; Số lượng: 2; Đơn giá: 150000 VND; Thành tiền: 300000 VND    |     5. Sức Mạnh Của Thói Quen; Số lượng: 1; Đơn giá: 45000 VND; Thành tiền: 45000 VND    |     ', 0, 725000, 1),
(14, 'Ho Nhat Nam Khanh', '0000000000', 'Hue', 'khanh@gmail.com', '1. Bạn mới là chủ nhân của cuộc đời mình; Số lượng: 3; Đơn giá: 100000 VND; Thành tiền: 300000 VND    |     2. Chó Sủa Nhầm Cây; Số lượng: 2; Đơn giá: 105000 VND; Thành tiền: 210000 VND    |     3. Cuộc Phiêu Lưu Của Tom Sawyer; Số lượng: 1; Đơn giá: 75000 VND; Thành tiền: 75000 VND    |     4. Hợp Đồng Của Quỷ; Số lượng: 2; Đơn giá: 150000 VND; Thành tiền: 300000 VND    |     5. Sức Mạnh Của Thói Quen; Số lượng: 1; Đơn giá: 45000 VND; Thành tiền: 45000 VND    |     ', 0, 930000, 0),
(15, 'Bui Duc Hoang', '0000000000', 'QB', 'hoang@gmail.com', '1. Bạn mới là chủ nhân của cuộc đời mình; Số lượng: 3; Đơn giá: 100000 VND; Thành tiền: 300000 VND    |     2. Chó Sủa Nhầm Cây; Số lượng: 2; Đơn giá: 105000 VND; Thành tiền: 210000 VND    |     3. Cuộc Phiêu Lưu Của Tom Sawyer; Số lượng: 1; Đơn giá: 75000 VND; Thành tiền: 75000 VND    |     4. Hợp Đồng Của Quỷ; Số lượng: 2; Đơn giá: 150000 VND; Thành tiền: 300000 VND    |     5. Sức Mạnh Của Thói Quen; Số lượng: 1; Đơn giá: 45000 VND; Thành tiền: 45000 VND    |     ', 0, 930000, 0),
(16, 'Ho Nhat Nam Khanh', '0000000000', 'Hue', 'khanh@gmail.com', '1. Bạn mới là chủ nhân của cuộc đời mình; Số lượng: 9; Đơn giá: 100000 VND; Thành tiền: 900000 VND    |     ', 0, 900000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `id` int(11) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`id`, `tittle`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Ngôn tình', 'Những truyện ngắn ngôn tình hay trong cuộc sống', '2023-12-23', '2023-12-23'),
(2, 'Tâm sự', 'Truyện ngắn về những tâm sự trong cuộc sống', '2023-12-23', '2023-12-23'),
(3, 'Tình yêu', 'Truyện ngắn thể loại tình yêu', '2023-12-23', '2023-12-23'),
(4, 'Trải nghiệm', 'Truyện ngắn chia sẽ về những trải nghiệm', '2023-12-23', '2023-12-23'),
(5, 'Truyện cười', 'Truyện cười sưu tầm', '2023-12-23', '2023-12-23'),
(6, 'Truyện ngụ ngôn', 'Truyện ngụ ngôn sưu tầm', '2023-12-23', '2023-12-23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(18) NOT NULL,
  `thumbnail` varchar(55) NOT NULL,
  `birthday` date NOT NULL,
  `role` varchar(255) NOT NULL,
  `chucvu` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `thumbnail`, `birthday`, `role`, `chucvu`) VALUES
(1, 'admin', '123456', 'khanh.jpg', '2000-10-11', 'Nam Khanh', 'ADMIN'),
(2, 'admin2', '123456', 'hoa.jpg', '2011-10-13', 'Nguyen Tien Hoa 3d', 'WRITER'),
(6, 'user3', '123456', '', '2018-06-07', 'Hoang Bui', 'WRITER');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `advance`
--
ALTER TABLE `advance`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_theloai_baiviet` (`theloai_id`),
  ADD KEY `fk_user_baiviet` (`user_id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `advance`
--
ALTER TABLE `advance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `code`
--
ALTER TABLE `code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `fk_theloai_baiviet` FOREIGN KEY (`theloai_id`) REFERENCES `theloai` (`id`),
  ADD CONSTRAINT `fk_user_baiviet` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
