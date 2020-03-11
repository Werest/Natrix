create
    definer = newuser@localhost procedure s_hvo_momo(IN name_ varchar(100))
begin
    if name_ is NULL then
        select name, info, link, img from momo;
    else
        select name, info, link, img from momo where name=name_;
    end if;
end;

