function makePayment() {
    FlutterwaveCheckout({
      public_key: "FLWPUBK_TEST-SANDBOXDEMOKEY-X",
      tx_ref: "titanic-48981487343MDI0NzMx",
      amount: 54600,
      currency: "UGX",
      payment_options: "card, mobilemoneyuganda, ussd, bank",
      redirect_url: "https://glaciers.titanic.com/handle-flutterwave-payment",
      meta: {
        consumer_id: 23,
        consumer_mac: "92a3-912ba-1192a",
      },
      customer: {
        email: "info.ipim@gmail.com",
        phone_number: "+256-392 001503",
        name: "Rose DeWitt Bukater",
      },
      customizations: {
        title: "International Paramedical Institute - Maya",
        description: "Payment for School Fees",
        logo: "https://www.logolynx.com/images/logolynx/22/2239ca38f5505fbfce7e55bbc0604386.jpeg",
      },
    });
  }