create
    definer = newuser@localhost procedure s_lko_w(IN t1 varchar(19), IN t2 varchar(20))
begin
    select Passenger.name as fi,
           date,
           plane,
           town_from,
           town_to,
           time_out,
           time_in,
           C.name
    from Passenger
             inner join Pass_in_trip Pit on Passenger.ID_psg = Pit.ID_psg
             inner join Trip T on Pit.trip_no = T.trip_no
             inner join Company C on T.ID_comp = C.ID_comp
    where
            time_out >= t1
      and
            time_in <= t2;
end;

