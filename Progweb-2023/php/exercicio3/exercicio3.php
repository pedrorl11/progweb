<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    
    <?php
        $datetime = new DateTime( "now", new DateTimeZone( "America/Sao_Paulo" ) );
        $hora = $datetime->format( 'H' );
        if ($hora >= 0 && $hora <= 12){
            echo "<h1>Bom dia!</h1>";
            echo "<img src='https://i.ytimg.com/vi/Tk6e2nLxTqQ/hqdefault.jpg'>";
        }else if ($hora > 12 && $hora < 18){
            echo "<h1>Boa tarde!</h1>";
            echo "<img src='data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoGBxQUExYTFBMWFhYZGRYZGxkaGRsaIBsaGhYZGBkaGhgbISsiGxwoHxwWIzQjKCwuMTExHyI3PDcwOyswMS4BCwsLDw4PHRERHTAoIikwMDAyMDYwMDkwMDAyMDAwMDMwMDIwMDAwMDA5MDAwMDAwMDAwMDAwMDAwMDAwMDAwMP/AABEIAMIBAwMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAEAAIDBQYBB//EAEsQAAIBAwIDBAYHBAcGBAcAAAECEQADIQQSBTFBEyJRYQYycYGRoRQjQlKxwdFicqLwFTNTkrLC4SRDc4Kz0hY0Y/EHJTVEg5Pi/8QAGgEAAwEBAQEAAAAAAAAAAAAAAQIDAAQFBv/EADARAAICAQMDAgQFBAMAAAAAAAABAhEDEiExBEFRExQyYYGhIkKRscEjUmJxM+Hw/9oADAMBAAIRAxEAPwCW3pgeVEppooXT3x40dau18oz6WVi21G9ElhUN2ngcmWQDqGNVmparPUCqnVg134UcGSRWatqCBzRWpFCqtejjOZlz6P65rLh1Ct0KsAQR+Xtr0/h2qW7aW4ogN0iORg/Oa8o0QrZrx4raS1ZEbVUFyMzGYHTM1xdf0jypaFv/AAWw5NDdl1x3iC2be4ruJwARiY6+Veda+8XYsYk5wAB7gOVafinFu2sFHWHBDBhyMSDI6GCayuoFHoeleKD1L8X8GzZNT24IrZqx0XOq1BR1gkKfGD+FWnEmmbT/AML6hPs23IyVS4CwHjDBcUuH2HutstqS2ZnG2DB3E8s4jn5Vp9U9sXS1o2/pd22uzeTBXyPL7JMDJ2icCRTcNuPasXj3lum8Lbn7S90OZjqSzZH3wR0pcnTw73XcaORkF3TXLbbLiweY6gjxU9RkeeRIzUlm0xDlRItruYzEDPLxOCY8qm+kNc07FyWNu4kMcna42wT1y3XwHtqy4Aypbt7snUMxHKNoQ7fcVUe3fXJHo4TybfDVnS88ow35sprl4Chr2pin/R9hKEmUJTP7JgH3iD7xQ+sk150ouMmn2PSxJNJljw3hN7UWxcU2wpLASzA91ipwFPUHrQ/FuH3LBUOVO4MRtJPq7ZmQPGpvQ2+41C2w7bNtw7NzFZJDSFJgZJ+NVXHdXc7a6rOz7blwKCzNA34CgnHQY8K9J4sLwqUY7vb6nInk9Zxb2W/0CVW52XbBfq922Z65Ex4SCvt6U/SaS7eVmUoFQgFnbaJMHwPiOfjWgu6RTp20IzcWwj+19zEHy76z7xVP6H6ZdRpL6OWCs6k7fWhQjwBBziIifCrLo4xkk/H3IPqZOMmvP2K/jOgv2Nm4KRcYKrK0jceQJIESM+40tX6J61AxCo/kr5+DBR86C9KvSYXES3YTZYs95QeZNsELI6ACcHPjV36X6y7a4lYayW3OlpSgJIcdq+CvLkTnpzqkcGK3XyM8uVJX3tmL0vCr99yiWrjMphu6e6fBicKfI0RxL0Wu2AhugLvJAhgxkRgxgc/E16Npb6Nq9bbRghFqxuYcwxW4C3uXZXnHHbSLfC29SdSsId5ffkt3gpk45YmnnhjGOwYZ5zlXAbb9H79q6mnNsC84Zl74hgoM5HLkedds8N1d03ra21mzAdd4ESGIjoRCnr4Vs+Lj/wCa6P8A4d7/AAtUPAf/ADXFfbb/AOm9b2sLJ+5nR5kLjHkTmmsxp+ncrmmsOtc1bnemMilT9tKmCWltDRVua5bqdK8ds6pMQuGmvcNTU1xVMZx5WB3WoHUJNW3ZT0rjaP2V6OE87JRm72lmok0PlWo/o4GkdPbTLMPxPwFehAgyq0XD+WKI1twqRatKXutgKokj3ePPFWGms3r8rp7ZVR6114VVHU7jgfM0Hq+JWtIpt6V+0vti5qY5eK2p5T1c5P4WFGcO1C318HHrL19seH4VDqdB5UQj2taQ6uum1vUnu27x8QfsXD16HNPua25ZbstZYa033wO63njB/wCUmgzFWNHRmmseVWNlbT5S4p98fI5qYaZR1HxFc2QeJqLOv0qW7F5yHvJZRQqncQdnUclOWy3iaD4brrdx76XiEXUMr7hgLcQKi944B2paAJxKecGnt7ZgEE+VEWxFQn1Mk+Nv3KQxpoteK27dq12Fu6CzOGdyRCzCrMYAyDHgD4ii+LcSt2rloKiutpAysGPdBBUwFwTtHzqkUV1RXPLrHG9Krj9EdUOmUuWF8fdGvM1t1dWCklSCAwlSJHkFMefnVW9EMaieuLJP1JuVVZ6OGGiCjfAV6LXFTUqzMFUJckkwBy6mowlq5xGd6G32hubtwgwocBTyJ3wPYDQF0UNdrqx5lGEYVw7JZMGqcp3yqNSvpHbGvINtFmbZvb/sqCwme6AWEe8VWvquw0+qNi8uNWjIykMCrbW249ZQDtPkKz7rQ7rXTHq5Plf9HO+jSqn4+pb+lHENLqEW6iMmoaBcUDu+B3E4byIz0PlccS9INPaS1fWLuq7BEXqLYK7izeBzy5kYwDNYxhTdtFZ5buuTPp47K3saH0C1k6m92lwA3Ldzc7ECW3KZM46tUXE/R3SWkQWtcly8biLl7exQTBZgJIAwctVNY0TXDCoWIz7Pb0pt/SOkblKzymmWdUlJWLLD+K4ujV6p1bV2SOJk3Et3DcvN2IRQYGy0NoQt3ic7oAzJpnD7loXNVd/pF0tMyqf6rtbpVMmCmFlmA2qJ8orL6fSs5hRJpJpyW29eWab3C8Ce325B4pbaMu6LaJJz4VBtrnUrOki20qlilTGLW0g6miUK1WWFo+yteRR1SCgw8Kdv8qjUU8CrQOXLEcizRVgWlsG5ctdoTd2DvFYG2TBHnUWnFcvt/so8rx+aV3YmcGSIxtRoz/8Ab3iT0Fyfd41Jq2WwvaLwyB9+6WuAeZXkPfFT+g9lTfYkSyoSo85An2j86qL/AKR6si6O0eCDvG3CgmD07o6e+u/GyDKrjnHr+oEXLh2dEXuoPDujn75qp0nD7t7d2Vp7m3LbVJieUxUupFeh+gukuabSWriWmd795S8Ady1lQx8oE/8ANVrFPKWrR+jXGdftNq0jam0oG606dqoBmOeRyPWKj9OeEfR9ZdQCEY9on7r94geQO4e6rz/4Wag2rWuuDmlu2390XTQcjUQaO/p77sh4WwuLO4WbjiIMHuclzU7XNHbYodLfDDBV7sQfOM1qdFpF0+ovaheWpu2AnsYbn+e6sp6Up/tl/wDeH+Fa5skh4osL1m3One2nZh0JKyWyGI5nn0qRrdcCnZpR+y/+NqneuHKzpxohArprtKuSR2QGMagc0Qy1C4oKJ0KQM5od6JuCh7lUijOQO9Q3BRLCoSKtFCORAVozhWhW6xDNtAHzqO1tnvCfKutf8AB7KLb4Qlmg096zYlUGDEmZmMda5qNejOpCho6GOfSs7dS5G4hgD1giaauq2HPOoU7DSNHqXEliFUkZIHP2+PWqC/eXcSog+NMfVs2dxrlsd4A/z1qsI0rYrHppbtzIH5UPctEGD0o+9qWHJqFuOWyaeEmzPYH20ql2UqfUAIsLFGW3FVyPRFs15+k6Ww0XKcrVFbqRKaJGSCtOan0mia9au2ljct1XEmMEMp/KodMtT2h37lv+0tkD94ZHzFdOORx5YjdL6O6u24uWygYcu+PeCOoNWeqTiLoyrb06FwQzqcnpzPWsfczVxxX/AOn6cf8AqP8A567IZDllAr7voFqz0t//ALBVlxXhPFbwQA27Kou0LaulBHLOc4xWc4ev19r/AIlv/GKN9PVnW3v/AMf/AEkqqyC0H8e9GuI6rs+1t2N1tdu5Xywx60k5kT7zTOC+jOv0yXraJYK3lCNLzAAYYgjPeNN9AF/81/wD+dZy1p6EshkmbVeG8Q26dWWzFggr3/W2jaN2c48Ki1fo9qbl1rrrbDMZMPjkBUWuT/YNMP2m/FqC0OnLMq+JA+JrmnkKxgXd6xtuWrZ/3doA+0yT+NcvLXd4a5cbp6o9gx+AFcZq5ZyOiEaByK5vNTMlQ3FqdHRE524ppYHrUNxahYxRSKWTOtQXFrnbGl2o9lOkwNkLrUTCimTE0rW3qKbVQvIEEJwBNW3C7Fu33nAJ8+lQDV7eSiaF1N5m5mlblLg1JFpxbiNtuTzHyqiGm3kkR+dRNpp61JYUocVlBoNocdA+MbZ6mkbUfak1K91jzNMiqJPuBs6kcz8BXVYDIHxzFNilTUrBYvdXKdSo7GB7bUVaagbbURbeuRnQHI1FWV6mg7C9TRO+lEe4WtyKVy6ZV15oZoFr0mBR2lXGeVOpUSlEg4npQrmPVbvL7Dn/AEoniInRWB+23+au3F3W9p9a3Meann8DTtWJ09seDH86rHIc8oFHw+z9db/fT/EKO9MbO7V3T+5/01ruitRcQ/tL+Iov0itzfc/u/wCAVVZCbxjPQ61t+kedoj8ap7ditB6PLHa+dsj8ar0tUHkMoB2uT/ZLA8Cf81R8KXbuufdED95sD4ZorU509pfM/nUJWIt+GW9tScrLRgSWl2qB764TTmaaiY1NlEjpNMLUt1NY0Bhjih3WpmNMJp0YGYVGRRDpTCKojEJFIMafFcIpqNY001kp8UttYxEUphWpyKbsrGI4pbKeVpRWMN202KfSomGRXa7tpUDGmX0d039j/G//AHVNb4Dphnso/wCdv+6jLIb7QAHkzke+QIqfb5Z6T194rnRBzl5AU4LY5i1/G35Gmvwax/Z/xN+tWMkGIA+P6U7b5+6jSBrfkrbfBLIP9V/E360QOGW/ufM/rRTOAJIY55QTXE8QvyplQjnJ9wc8PtghgmR5nIp2t4daNtQq4knmfPzotW/mAKa11BjcsHzFVVCOUit03DE3Kdv2h1PjRfEuF2zdY7fDqfujzqcKAwyOYOPbRN1JYn2fhXThUHs0RnKXkB4dwy2N/d+yep/Wgl4an3fmf1q+s2gN2OlCraM8hHjn9K2VJPgMZN9yMaC2LakrkTAk88+dRDhdvqmT+0f1o2GJzEDkINduT05+ER8+VczodSl5Axw239z5t+tIcNtH7Hzb9aLEdTTe0HMGOnh8v9Km6HUpArcKtfc+bfrTDwu1/Z/Nv1oq5E5YEj3x7c8qbd3Hk3tlfkOlTYylLyCvwqz9z+Jv1pjcJtfcEfvN+tTqAJgCevdAz5xTwf2l9nX2c6W2MpMr/wCjbX9n82/Wmnhlo8k90t+tHXAYzHxj8qgULz2rHk3X3c6XUx1JgrcJt/c/ib8KYeFW/wCz+bUfbuiYEDr0/DnXL5/aHuJmhqfkZSK4cNtn7B+J/OmtwxPuH40Z2g8zHlj/AFqC7cmQY95/GK2t+R7BzwtPun41G3DVj1W+NEFzzVseRB+M063cnmSPaBn2c6VzfkwGeHr1B+NRPw9R0P8APuqwe4o5v8Tz91Ma8JOT4Yj8qXXLyEA+hLzg006EeBokvnm3w+fgfCulx192Y/IVtcvIUB/QR5/GlRLT4D4/6Vyhrl5GL1NSzcgy8+YDf4T/AKU5dXzGcdSAufifwoG7bvFu6LYA5y9wn5ACoraXS2bllZ5bUyfe5JPurqTONothqdoG5z7yvn5Cmf0lYOO2G7w5n4ARQDWSve7RYA9YqFHxg9am018N0R45lRu9mFXn7a1g0hR11ucM/uBH5ZpyhWOO3+LR/Fj3UDcuhBOwjx229vzDCoxxW3cMG9dtnwO1Z97T+NazafBdWlWOmPvQfmSfxrtu/aPUe4j8qD0TyNwd282cEfw/pU9vVESCAP56YFNqFcWHWbixyMc4j9YqQXUGSNs+R+cDFVP09SDPw3Y+AY/hT7lxzAVynkEMfKJqsM2ngR475LYXgZ2gn3H8TFCttwWBXwEA/GKrbumd/WvXo8mC/Kguz06GW1Tk+d4j4AHNDJmcnbQY4ku5dzbE5I9hb/LiuN2Q9baP3jn55qq0tvT3pIG+Dzfec/8AMv4Gibmkt4CiI6L09gIioamNpQcSg5kZ88n3UzT3kEiCsZMq46+LAT8ait6VRkA4HMkgn4EVG161MHaWPipPLzEgmi2agntQTgN7Zj5g5FM1avslGVG+8U3fiardTxW3IFxkYchFpz+IOagucVtf7u2znPMugx1AAOPhQdhUWWNlLoA33EPmqR7/AFqlubz6tzz5T8M1T6fi93rpUjOVc4/vWx+NEoxeckCPVO6B4QSYHuFIx6CmUjnIPMkKQD71M0x/EFj7blxf4YoS61qNhVhGARuA9sgCh2SymQsHqxZ1MnEyR84pRqLO45EAbzPht9uSaZtnq3jt3AfHb/PtoERGFvNy9Uk/5l+NMN95EWLrnxLBQB4RuaaASxefDPn5fz4UM98gSELfu7cn3mDTQ9yNzJd64V0P4gRVZd4jfLELYAHQtcGT7QPzoJWMGpqnb/djPQsoJ/ujB99Q/QASSRk/+qx6+ME/OgfpmozvFpZ8bpBin3dTdxuCDEbjLE+Ed0Y+NZxaGQfZRVJAb2jeT+NNuXUnLAexvyigNt05VrbeZQbR5eI99K5cdAO0Ke4E/BQAJoaQhdt16MIxEZx780jqVYCJjx5fjVUmrBkZx4SPeQGJ+VdS7bUwXYnwlz743flWcNg2W3uHxH6Uqrvp6j7Lfx/9tKhoYxaXFQAAXbSsSBJChj4YW4pPuqw09kDtE7Vma3639YFGQsBt5yCYiM5odRf6Pp93QLbYeyA1wD34oy9rmCktaO4lWIVGOQZPUjbOYkZ8a7cbhvqOLJqXwj100yGCmCwySY2xuJZvCQT0p1yyC2T904KAd/CmSYM1CutkE7SFO+QbV2JcySYk+GQambdhg64ZGwhjupsVdu6QOvjVKwruxLyCFlMsxGFdu9sB7nrQBkgGB7a7cNlQWKrIjcN1sFdwJUGSIkAxMSBXBpXKbd6g7dm8IZClt2AWIB5jInPxWt0u895wo3biFUAsYI72/diC2BHM0JPFp2ZlrsdY0llzD2rQIYLBKMwYjcAQOR2yY8Kbbs6faG22VG1XjEgM21W284JxPjU/YAkmFHed8K3rOIJMtkwT8a4dKh/3aAfVgsQoxbyi8zMEKYgcvg1YHe4rcxly9bHd7QABmXuquCgl9xaQAogk4A8ak4dqlBMDMqBJtgNvXckMvPcMgA+FSJpgswFk7zCgjNxgXJMzJgdRyrtq0Ew+1TlgTHrHE+tmFEeOaaCxXsLJyBdfxbUGBbsoQwwQ+7qRHIAEEEET0oD/AGluQtKIDF5tmc7ZkSImRz6Gr+ztnuquICxyAEnJHmTUN3TsowVBJB9Vm5erndMT1n4UJrG23JtjRm1skijCavINxBkrGVJKmMAbS0Ej1cfGjF0moIjtFkTmcd2Nw7plSOsk0X3xBZ1kEkkKRMmfv5BM/wA8mLdRm2C5bJhpQdA8bzG4wSBEnl7zUqw+WNqn4QHf0eogkXbQiJJLNgkRB3iZBxj50jwu5kG/BEAgbY/ZUlu9J6DcKMuXrcmbqTKk9442rtGN2MTM85NcOttc1uWSwbfJIPezyAb9ojr0otYLXILmVOo0m3cfo6uRjc9xEBYTjruOGx5UhptUQAlrT285n6yMbhPexiTEVY/T1iFuIDADGCTGJhd3PzMxUOq4xaDFi0kggABjJYQYk4MdARQj6TXexrn2QLc4VeuQLjhpghbZ2cyQCPPB601OAKY+sNwgiO+CC0SFEttLR0FcX0ibtpFjUtgDFobMDaRO729etGaTXEY7O4Np3AslxoO3aAIY469ROaGnGn+Juhnr7IaOFQNzBCILck5TBPfb1R1PKuXNO6EKi94tthVtrkqWC7iT9kTgEeYriam3yCkd1beVuDuK28Az13TM+NGC458Ptz3TzcQSM9BgUt4Fy2b+oVKtqW37rYAFvehNy26sxdVQM2wKoyZIMiKAu29c5hrdm2QXURcTvFMvtW4CWI54rREnqyxKQM8kmB63jk+MUy4DEkifrO8QZHaEtciWgTJjwB8qZT6fhGrIZrS6fVXZXtFYQXJDIAAObFhHKn6j0cugFmKtBAzcYEkiVCEEhiRyAGelXItWiLgCBhcUIVBO0LuBjukGcDI6+VNS+5dT3TD9p/VOMgKFyWiFCgD+TQvFVye/yHfqN7LYq9N6O3VySQO9JF7Agw0kiBBwZPOp14YUUEXCBDsd1xQu0NsnfIHrYzHSJou5bLm4WRStxQpVmuHCvvBDByQNwGMUxLTIUZVtyiC2veuerLEhgCAwJZjBkHFDX07fLNWVrgHZr4t9puthAoeCwkKTtDZIO0nAaM9Kba0buiPvH1m+FF0HCc25ch3gTgCM9KJvKSuwC0Pq7dstsJJS0ZQHMRMGB4VIur27Y291GTG9TtYk8gZByc4oX0+qr7fcNZa47gx0D2wWjcFC5NxYO5dywY70jkB5UE+sbdEW46y2Z8B3APnU+tllKtsClzciWaSRtEsx6D+elApwSzzNtD7Fj4HkalJ4r2srBTa/EPbiVsc1t/EVyn/RlHJG+H/912kuPgpuc0/FLDulvsDbZiqqr2hMsY9cnOeoq0a3bd7hR9SeyKqVVwu4m4yDam4DbKvJMHEDwrCWfSpjM6i6eg3QijwP1doZqK5rOIF2v2XvDCo10XLlyVyVWTiPWIEeJ6mfVx4IR+I5Mik+D07TaC4GYMxJ7RlQi5c9RSsu4LYMlxtAbkM5xBxDh1xiCNZeRdouFNlpmgvsTmIgmck4HOvOuG6rXKQ6X2MHG62jbTPQNlZOe7BNaLQ63XIxulFusywC4KQJkiUubokzDGJzzo1ijLehHCfk013TqhH0i4t4BigJtgMGRAzNtU5MkCFXrRFuys7vrd02pUBCZuCdveJyoyYgYMTWP4lxRthGouMhuFiyreVFaZYyiDvSTGRHjiqprdwqb4u6lrYbcGF1AkqILG6rCCowCcgYoKOOX5QaJ92by3xrc18F47LcYVVG5ULb2zuJgKCVGc8qO7QBgrOSTdt2uQXvOgchZ27oHtPwivMrPEL+dmouBDlh9JVx1IlXSDg+YMeVXWn41qSO0QLqGX1CXDlTBG7uSA0EgSAIJxW9PEuUFwn2NXe4hI3glVi9cELubs7bIoK7HjJbEyfGOVF6fW3AAwfcNtx4JE4ZUAkmBLSIPLNef6bimr7uyx2ZAYdoNzAAkllEMAoJ5wRmhtHpde93cuoYEEjqghjJCgESCTMDmTOSZopwu2D0ZVyen/0rDgXPts4XkIVLXaM5BaSB6uBPWIzUDcZRuRP9St7oBtZoQByduZHXz8qxXD7F5SVdLhUb5Y22HrmXbtHuAy32i3PrTNZxHYwRNW8KoWbSwttJjabjXAsCBhSekCg3GTpxB6T7M1SccR+2dRcdbQA7tokszNtCoWicz4cvCKmv8R23NjF4+vIZbYgLYEu1xicAnuiBz9orL6Litu3a7mr3h3E3DvDkqrAAm22+O8xyKF1vpfbt9xdUSB9kWiy8sgRtBnzakisbdaf3C4S8ml1mr3sTN3u27dy4iFVM3NnZ203MJclhkkKMdak02oa3evJsuOtsKN8XGZidi7VBBGHYj1sBSeVY3Uem28ErrWtnysgE+1u9jy8qBs+ml62SUv2r082KPbczz5Msn3zT+lCS+EOiXk9Iv2rly6ydt2abwi9mEJJW0r3GuB+QDMRtEmIPKqTjPEtnZL9OcO6pcC27VtiUfcF2+JMCDyqr4H6bpfJtNadLjST2RchoU7iwAmdoyTOOvSmajjVwXBct6SzfVdm0h0YgLG0AbFYARgDAjFK1HVTjX6BUZLuajR6YIzKL2ocrde2xuSA3Z2jcdragd8D1egJ+cjXPrCO1u7jaW4LTNbB724su0EZVV3HPXB8Me/pFrbxL29PeV0DHeR2hUHmF+rJQHljoKN0Tai+jLdt6gbsMbTOAQREMt7mIwQJEYjmDpxxrdxAozfc0Ujs1uHUdwI7syzHc2yACxggsoyY61zVXbf1g7Vme3bFwruAZVKBySMDAKyOcMDVc3D9RvD7irqCAzXXdo/dBVVnqMcszXNDbu98G6sHvMCo2sYiT9YdxwMk9BUXLBWyHUZ+Q1dbaNgXi5IdbhWElm2NsjauTLAjlHieVTX9VbQ3f62bRRGwQHd5hULsEMQ0mcQaF0TlgUNxGC57Ndo6gztDsOefbQnG74tL/AFd+4pO7AuQSZO4lnVZ55k8/PKReJvSoNjaJ38RfFCSRBlbhtliBBCoWuMgBJO2NsECT8a5dIChtl3CK7Lt75Ny4UUEboxBPs9tZl/StQFbe5ucgDctSpMCNvany5Saj1XpO6Pse1dtXYAM3kRypEj1jJBHnz86ooR3qGwumfeRptS6r2kFm2PtMDpIVWjmQWJXE5FC6HVpcLnmLYkgtsBPJUJYjaScZ8CapjxpyqhVZVBkb7pUA+IIIBPWm3dcHTvC3JEwXDISRE7S3eOTkieeaj6cNSlp+hRKdNXyX+qCb76jBt7Wic7Cu4MCfWAlRiT3viHeutGCBjJIifZPWqQcaMbRq7QGDt3yJECIN2cQBBwIp93ipBkahT4hVBX3bT+Zpc2JSlcY0PjUo/EyzW4ZEkQeqgn55j30OdQhbIbunmQI+VCW9ZbY7hcQkHMll5+JLiR8aJvakGGVN55Sqz8GmDXO4NPdMvY76Vb++v9xv1pVA3FbIwbjCOkPj5Vyhpf8AazGf4S9reim9bddygsoIhS0EsAyxifOtb/S9g3FsG/ph9bqLgW04grbt7dPbuvyJYszkkj1QvjS06lB3raqPA7fwAz7TT7umnIBlh3QbUE4kbWPlPTpXow6um6jf/v8ARyZMeqt6BNSge3dvWRpu0Dqnf3XF7JbXeuWlUKvas7Z2CO6KsTwmz2lu2lu01m3ucszKSyJZYBHwWhrjIxLHG0gAA1Vpp9R/uYJ5w1syQJBO4HPtGPfUejbV3A4F20FQAvu2qigkACesk9cVVZ5Se0UTliSXxBf/AIesMr3Fs6Y3ktWVb6ubO6T2rJbnvEDs0GTzxJqReBWex7BgnYMLHqbluBu07S+9zPdSS4CdJxMzQ2q02rG62V9WCy2+URIJ70FcyCTVbe0moHd+szDFlUcp7p7u0R5Z91P7ifigLFF/mNEno7ozc3dhYARXG4KjbdzAqSkbXKBSIO5jvmZoa3w62l229x+zSN+yezVW2F7aXCDuBnbI9WInnFV+j9HGU+sd33ezCGOZxgkHqAfbVtY9GkJJCuGIl3ChQQWjIIYHP55qcsyk+G6Do0/mC7V7TXXZjct3Ctu2sqSQbnedjbtkkMxlUwJHQ0NwP6Ja23htVg7ybpLXIW3Ki3u+8eo9nlU130eszHYW2UlVA3vbyy7pO0QYAk4PlNdFlFA7txicKjrdZJBnGwAN4iRJHPyb1JJp6RKjVJsgT6K9qxbe4twMbRZizMytPaXN20Sq80hoUCBGRUb8JtXQi3tNaIe4yttsspt2IUKob1g5n1+fdJEVFd9LzZfs+wfdAYC1aicbhAa5ugAH7OM5FVPGvTviRYpYsXLRAJZRa3sB94grI5jNUi5yfFG9N+fuaDScCW3cW+lnTJdSzqY2ptty+0WF82WHBYZhiMziPV+jWmFo27lnTzstCcK+923XTvxsUAMAMRAjnXnvFOLcUvd66+qMHbhGQAltoU7QO8W7sHM4oBtNqN6pdt35OApRtxkxCyJOcRVql3Zlj+ZuPST0a0bHtvpFi1ZxbARVA3QbhQbMXGAIG7nETnnHxCzwpNLttrauyloqUKm+X3hrjMQdyhV3ggkLyArH3OD6hWRRavMSCy2yjEgMPWVRzBA5jw8qfp+C38nsroC4YqpG0zkP4H20OLbvcoobJWb/AIRe0FjSG5Z7MbrTCW/rhcuNsZWIJKgIeQPIE550Q/E9Kl5LKiy1uHK3DetMQgCIGYtMsd3aQ5JO1vCsDY9H715S4D7QDDEMw55grPs8zjnQdvhd8MyIl1nX1kW04Kz1YASPfRTTVVYPT3uz0FOJ6e1YuXEv2Lnc1TQfq3e6Cy2Ut2xhFgz1nd16TP6TaUuLZ1SItu/YG9bhm5bSz2l1iQcozdzOPDJBrznR8I1F902WC+9gqOLbBWboO0gL4nJ5STTNVotQjN2mnuNDbWJtnDltgXcBEyQB4yIpqv8AKJoX9xum9MLPYle0sXG+jq43O+b93UHbbK7hCW0guB05gARU68T0Je4Vu6U2e3cXEYiexWysCwg/rC93cQwmJ2jArz1+F3Cdp0l9Wxzt3PHbO3bIE49pobTcKd5KWndQYZlR2CmJgsFwfI0yUV+U3p/5Gy4BqtMujIe6lkvdUZuI79k1xbbJtndaKrNwOMQBMzBtdZr9K7paNzSMwbVPbVLh7PuKqaW1eeclg0k9SkV5nb4VdfcbdtrirJZkDMAPFoGBzyaL4d6P6u6UW3YuEupZG2QCqiSwdoEcsz1HUijFLsGUFd6jWaHT6e5xXTNaWyRbS2+o7NPqTct23e46DkFwoBwNwnNE3Nbor2mN9hphfv7u0Yuoe1cd9ga2sG4Niw4iFMsWOZrEW7GtUFQupi59WQBdi5z7hA9b1W7pnkfCuabgWpuv2Qt3N3clSrjaGaAzCMJ50TOKfc2nEuM8Pm+6ppj9dbs24thitvvdpeMt35HJuQ7uDFWdziHD7TIouaQIt284Fplzat2G7NLjEnc73CDIyYA8a8113AL9t7q9m9xbTujXURyk253d/byEZnlVaEIrUuGHRe6Z6hreJ6O9b7JjpgWtaPcyGG7R7ym9sLE7QloNIyZOc0/ii6NLjsljTRbs6g2iHU9pcdkWyjC2RO1d7kkl4nlXl4sN1XHjT7VkjvAwPGP5mgqS2N6XzZ6vc4hoX7W12mjW1c1OnW7n1rQsruNvOB2paGGFG886Zp9To5thzoUIt3jca0ylLbtcAtlUbF0oqQQMktIHerzEX0busSD4jl8JFRtqLij1jt84Irc7NB9Gu5fHizHI1TrMmFkATnAnFKs39JPj8zSqXoIvrR61Z4paUhjcV4aWVmnEiclRExyirS76S6fuN25Ic32IZl3Kbg7NDtPqwJgSJBmsSnYos7g0GIVTcBnxIYR8KOsEgTbsIZnvjaCMwYUlzy6mK4If07S7jTxxnTZqW9ILag75trFkIzFGnsx1JIHrHdPlyqezrrZQqwL9owO7csNt3YknOSDjyiaxT8NZm2C/J/ZXdnmQxiPPn1mp9FwYpcE72YryZlReUeoplveSKDm3y91fYX0IrZG1u8QEYItvukBdpgbBbRZbkQBzjxiKivcVRcIj87Q6MQLSwABOe8FMk+Mx1zvZ6kEgAGZgbtobnjYBLeHdGfCoBxnULchrNuADKqGLHABwW5eZH40scuR90xfQj2L5uIgXmuNNtSjKFUjd3k29pE7QZLGJIHjULcZ3C6ot3gjLYRFJkxanduIMwxPMmDgHmaZonVgrPZRJI9XvmYkSpAIJyJz7aLt6ZSJGmZlyJHZzJ6gMefspV1Eo7V+xniiJuI33l1S4GL32CkpKm5aW3a3ZhhbEsYJPhNP09wMpt/XQttrR73fR3KlnMGAxAKz9lSAuJqfhulULlriqTyZImOUZIHtj8qfetMpLP3bagy++Mc4OQYg+FUXUyvaiLxx4AlCjUXtS6Op7PahVS1ySiW0CORG7aSe6ehPjRA1qLsZlZYe1tCuC7pZRlVLhGebFoznHnUiXbdzLABTEHfPmGVmO7lmYHlM1C7adW+ruB3DSe+g6YDMcn2+Ro+4nWxtEW9zujF4m39XcVVW9OTi5cLFrgDGMFhE+GIqo1+vtW9VZuuGi1bW2hZg2bYeCScsd7EzH+lld1aKzQFJIMli2JkgKnSYJyc+YGK/U6iAO45cwGI3GfMyMj4+2prqJ9y0cKsZpuO2rpKdo7zat296NFwFbz3LhJZgQrkqPWkbeoqLinFjftXE7C6TcubgZt7EyAT2ivLgooUgjnml2Fn1igBOJG2f7rcvzpXLQUgguq4HqpI6QDtzJ3H3mnfWN7JDLp4phNniJt2gnaG2q2TaALbRue6HuXB3pB2yozImpz6TWxcLi1fY9oLiFNpVtqC2i3GUkgADnB5mhDbtuoZ23Z5ET1MQsAg+7FT3yBtREUgKu6RiO7zYzByPjzpI9ZJcmeCLOLxe1a7C4+4GzO5zsUgMrhU2o0EBmdgTHhmSah4Xxa1NoJccpaW8T39xa5c3fWGTBdZUjd1BjxqHUXwrlxbDNABYwSY5d5hAHOBJ8qhv298HZBxBWA0eJJGPcKddVIy6aI7U8TDo9u295GazYsLcdshLTvccm4D61xmAOOQioeGa9bGnXTgXxcW1qrYG5VRzefd2jZBZ1UhRjFBazhl0tNuE6QyOSc8908/OB+NGaThrWmU3SFzlQSTGRJEbj+FV9zJb6u3AfbwqqJ+CxptH2NpzbuBrrh12HNxAkszjusqyJAbHKp7fELe9SO3kaa7YN0fVsSwRbbFAdoKKm3dgmQYwKreJNbZotmRkDugY5wIIIPkRFCbbaCWILHl2lxU95UBoHnIrR6jK48mfTwbtrkt7Os5r9eFXSDTp2bjcrHablxdx272O8bucGiE9IUNztTa1Ii9ZuKEuKN62rItpbuvuEqGBaMyWzWa1Fxhb7/ZqCcFASx2iOW7kfEVHZ1W2Yd2LQZ2s5ETz3ZHmQTTxzZa2dmfTY73LvUcSXsDa+u3Npxp3AIFsFrpe9dVQc3HDHMc/HpkdbwPvv2TMLcnbvMmOm6BE1Z6u5aMbWY/eMGAfADn7yKAuaW3uJZkkZEus/BSKMcuSXxP7DxwxhwD2uGOOd5QB0mPgKbd4YjHDAk4gzM+Kn8qNNkGDbKg+BQOCOnTd59ffRaoNjCTvIkm0kZHMQTLezFFza3sfQuKM7qOCsmYYjwjkPOok4eDMEg+BBH41oNOwEC5dUDoDbZGPvkL+PsqO4bbmAx+B/E5pvVlwzemuxn/oTD7FKtEuh8GuD3mlT+sgekay3bQH6xxMwvZOBuHOIIBn1usGpHs2QylU1FxTggiATExuuR58vjVX/AEfqLom5qLCgdJGRH3pmOkMSM8ulDXOCmIuai2tsHkLiO7rjG7Yu3pEY8utcKxLu/wBwNmk0xcMWKraA9VBD3CR1DGECgZkqeWOkhazVKHkWYukgyyhto5Bw6gzkZJqubjVkAWrd20qj11uM0HJMBEG2fjUl/ilqztaxftIdpD7j2gyZEAz58oHlS+k74F+YbZLo4YX7buYi2XWFO4RCo3+nPFXnEdRdQBnSyGMKXZlIgZJIBG4xPdHxrBvxy7H/AJxRBJUW1UZnlsW3npih9JrLQulr9y4wfJ2W+zEk+s20A+6OtM+nvf8AgHLNZY1Luzjbp4BBZrbYkRt3qRyxHre2i9PqAB32gkQgW06bjyIYgeG0T0z4VSnTWYDfSEuWwQYN1TmJB2lQSeWOtCa7iR3DdcS2FMIwZVhQPsIk5z1E8qRw1Oq+wdK8mm1GrQ3NoC3COadrgyMndtmMsMSJ8K43EJB2wDt3BSpIwQzQxjvAziQSe94Vl9RxW1fCzcUlTkl+znxGYJUnnnzoG3xEIIF22zZgC32m3mZL58upp1h243Noj5Nbc1rOdh1iIIUDaN37U7rhIY8hg+IjqI+1FveL3EzcUkglU2lBE4FuQDzE8pxWeuelarhULSQSzJ4CIAIxQV/0xvEylqFzjIBJJPJY8aMcWTiqX0M9KZpRxO2sG3eiMq4Vnjb9lmuqYYjqImfeGW+MbmINxbh6Hs7jdZIZmIHTmAOcVmj6TakjaLYVY5DA88UMmuuodyWlU+09OXKKp6LaaaX6oZOJvbPENyl96xggdnsxByBcbPLp/wC5Fi5YY7nYK/QKI6QZncoHj+PKvOLvGr85UTnl4nniTmoH4xqGWJwDI/8AcVL2Unw0jOUfmej3dRtOxkJWcMTtEkyIaCG8eX4VFrb7uZZ7Uk+qtwKCPP7xAnw5H2Vkz6WX+yCdnyHMHqeoOc+Qqhvpedy7lt05JJ+E00OkbdypfyDVXB6Jb3yQe4ijmHLA88A4gxBycQMGhtRxMLu7W6oQAkbVJaIOAXJmsG9y7EM7EDoWaB84ppa3kMp8tv6Gq+0Xn7B1mq1PpkoAW2Hu9JdjbAHMQqRVTreOXrrT3iIjukt7eckxVfaFnGWXzI+YiidJplLQLo6nwIMTEH+Z+NVWLHHehbkyTS3IybmwyBkHl15yB5fhRbanc87yFBwFaS05GZg9DkDPSiLenSA0EAjJhWjxMSfbA+FSrat74QBlle8pMknlhlPLlAIpXJXsiii+5FaZzKslx4MRG0jy3BNhP7wnwrl0WQwDo1sDEjvkR0ZIkVNdUyOzvAEScdw8jnB65603WKCAwhidu+cgkmZEAhT0wR5Ul2xkhikTtF4CTG3AO08tpgKOoyfnUOq0uJYSJIBJVY9vy65rN+kqxdiIwMfHyFVU11xwWk7ODJ1jjJxo3C6RASpFwt5ACIHMMsD3iaIttLG0X7XHdZXXd1+2uSPI1juC2Ldy/aS7c7O2zKHf7qzk+XtOBz5CtBqeAaNVH18NF1mUXbbbAmmW4olVhibrBMHPTkSC+nvuKutfj7hl4LvbtJcDHfLSSOhxK/HpQWr4cykFlKzyLOBgeQn4VkZpTRWCu4fff4mxXQr975P+S0qxs0q3t/mb33+P3NDq1EnHUfnS0KAxIBz1z4VylUn8KLPkuLdhd3qj4DxFPs2Vk90fZ6Cu0ql3ZSHIZp/yqI809/40qVcxaXA76MnPYswMwJ+NM01he93V5HoPE0qVVn8KEXJZcAQS2B9np+1U3FNOgu4VRg9BSpVB8sZAehQGJAOBzE/ZFBhRC4/maVKqQ7jodaQd3A+HkKMu2V3Duj1B0HgaVKmj3FlyUbqNox938abeUb+XjXKVUQhNcQZwOnTzNNufmfxrlKs+R4jbPJvZ+ZofUdP58KVKmXJnwVzcz7fyqK5SpV1IhIl015pHePhzPLwq9sKN6Y5lZ880qVSmNj4RbKx+rackupPUjaME9R5UFxfHZRiUExia7SrljydCMv6U/wBcfYv51T0qVenD4EeFn/5Jf7Hpy+NSN0pUqciQvzNcpUqxhUqVKsY//9k='>";
        }else if ($hora >= 18 && $hora <= 24){
            echo "<h1>Boa noite!</h1>";
            echo "<img src='data:image/jpeg;base64,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'>";
        }
    ?>
</body>
</html>