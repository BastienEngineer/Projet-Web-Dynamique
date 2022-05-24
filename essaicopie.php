<%
Set jmail = Server.CreateObject("JMAIL.Message") '
jmail.silent = true '
Jmail.logging = true '
jmail.Charset = "GB2312" '
jmail.ContentType = "text/html" '
jmail.AddRecipient Email '
jmail.From = "Email From for Sender" '发件人的E-MAIL地址
jmail.MailServerUserName = "UserName of Email" '
jmail.MailServerPassword = "Password of Email" '
jmail.Subject = "Mail Subject" '
jmail.Body = "Mail Body" '
jmail.Send("Server Address") '
jmail.Close() 
%>
<form name=contact method=post action="sendmail.asp"></form>
<%@ Language=VBScript %>
<%
dim strT,strT1,strSend
strt=request.form("Name")
if trim(strt)<>"" then
strSend=strSend & "姓名:" & strt & vbcrlf
end if
strt=request.form("Email")
if trim(strt)<>"" then
strSend=strSend & "E-Mail:" & strt & vbcrlf
end if
strt=request.form("CompanyName")
if trim(strt)<>"" then
strSend=strSend & "公司:" & strt & vbcrlf
end if
strt=request.form("Industry")
if trim(strt)<>"" then
strSend=strSend & "职业:" & strt & vbcrlf
end if
strt=request.form("Phone")
if trim(strt)<>"" then
strSend=strSend & "电话:" & strt & vbcrlf
end if
strt=request.form("Street")
if trim(strt)<>"" then
strSend=strSend & "地址:" & strt & vbcrlf
end if
strt=request.form("PostalCode")
if trim(strt)<>"" then
strSend=strSend & "邮编:" & strt & vbcrlf
end if
strt=request.form("Subject")
if trim(strt)<>"" then
strSend=strSend & "留言主题:" & strt & vbcrlf
end if
strt=request.form("Content")
if trim(strt)<>"" then
strSend=strSend & "留言内容:" & vbcrlf & strt & vbcrlf
end if
set mail = server.CreateObject ("CDONTS.NewMail")
mail.To = "收件人信箱地址"
mail.From = "发件人信箱地址（可以随便填）"
mail.Subject = "标题"
mail.Body = strSend
mail.Send
%>
<%
Set jmail = Server.CreateObject("JMAIL.SMTPMail") '创建一个JMAIL对象
jmail.silent = true 'JMAIL
jmail.logging = true '
jmail.Charset = "GB2312" '
jmail.ContentType = "text/html" '
jmail.ServerAddress = "Server Address" '
jmail.AddRecipient Email '
jmail.SenderName = "SenderName" '
jmail.Sender = "Email Address" '
jmail.Priority = 1 '
jmail.Subject = "Mail Subject" '
jmail.Body = "Mail Body" '
jmail.AddRecipientBCC Email 
jmail.AddRecipientCC Email '
jmail.Execute() '
jmail.Close '

Set jmail = Server.CreateObject("JMAIL.Message") '
jmail.silent = true '
mail.logging = true '
jmail.Charset = "GB2312" '
jmail.ContentType = "text/html" '
jmail.AddRecipient Email '
jmail.From = "Email From for Sender" '
jmail.MailServerUserName = "UserName of Email" '
jmail.MailServerPassword = "Password of Email" '
jmail.Subject = "Mail Subject" '
jmail.Body = "Mail Body" '
jmail.Prority = 1 '
jmail.Send("Server Address") '
jmail.Close() '


