update gs_an_table set name= 'TEST',email='test@test.jp',naiyou='内容１' 
where id="6";

update gs_an_table set name=name,email=email,naiyou=naiyou where id=:id;

delete from gs_an_table where id=20 