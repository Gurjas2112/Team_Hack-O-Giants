<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My ticket</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Sometype+Mono:ital,wght@0,400..700;1,400..700&display=swap");
      @import url("https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sometype+Mono:ital,wght@0,400..700;1,400..700&display=swap");
      * {
        font-family: "Lato", sans-serif;
        font-family: "Montserrat Alternates", sans-serif;
      }
    </style>
  </head>
  <body class="bg-[#EEEBEB]">
    <div class="flex justify-center font-['Lato']">
      <div class="flex w-[120ch] px-[24px] py-[16px] flex-col gap-[16px]">
        <p
          class="text-[#1e1e1e] md:text-[32px] text-[24px] font-bold font-['Montserrat Alternates']"
        >
          My Tickets
        </p>

        <div
          class="flex p-[16px] bg-white rounded-lg shadow border border-[#d9d9d9] flex-col gap-[16px]"
        >
          <div
            class="flex bg-[url('images/cover.svg')] bg-no-repeat bg-cover bg-center p-[16px] h-[200px] rounded-[8px] justify-end flex-col gap-[4px]"
          >
            <div
              class="flex gap-[8px] p-[4px] w-fit bg-white/80 rounded backdrop-blur-[10px] text-[#1e1e1e] text-[10px] font-medium font-['Montserrat']"
            >
              <img src="icon/date-icon.svg" alt="" />
              <p>15 / 10/ 2024</p>
              <p>10:00 Am - 4:00 PM</p>
            </div>
            <div
              class="flex gap-[8px] p-[4px] w-fit bg-white/80 rounded backdrop-blur-[10px] text-[#1e1e1e] text-[10px] font-medium font-['Montserrat']"
            >
              <img src="icon/location-icon.svg" alt="" />

              <p>The Golden gate conference hall, SA</p>
            </div>
          </div>
          <div class="flex flex-col gap-[8px]">
            <p
              class="text-[#1e1e1e] text-base font-medium font-['Montserrat Alternates']"
            >
              The show name
            </p>
            <p class="text-xs">Bronze Tier</p>
            <div class="flex gap-[8px] items-center font-['Lato']">
              <img src="icon/ticket-icon.svg" alt="" />
              <p class="text-[#4f5dd5] text-base font-medium font-['Lato']">
                TIC - 1
              </p>
              <p class="text-[10px] font-normal font-['Lato']">(Ticket ID)</p>
            </div>
            <div class="flex justify-between">
              <div class="flex flex-col gap-[8px]">
                <div class="flex gap-2">
                  <div class="text-[#aaaaaa] text-[10px] font-medium">
                    Booking date :
                  </div>
                  <div class="text-[#1e1e1e] text-[10px] font-medium">
                    23/9/2024
                  </div>
                </div>
                <div class="flex gap-2">
                  <div class="text-[#aaaaaa] text-[10px] font-medium">
                    Count :
                  </div>
                  <div class="text-[#1e1e1e] text-[10px] font-medium">19</div>
                </div>
              </div>
              <div class="text-[#4f5dd5] text-base font-medium bg-[#4f5dd5]/50 rounded border border-[#4f5dd5] px-[8px] py-[4px] flex justify-center items-center">$999</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
