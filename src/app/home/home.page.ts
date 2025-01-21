import { Component } from '@angular/core';
import { IonHeader, IonToolbar, IonTitle, IonContent, IonList, IonItem, IonThumbnail, IonLabel, IonButton } from '@ionic/angular/standalone';
import { CommonModule } from '@angular/common';
import { DataapiService } from '../dataapi.service';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
  standalone:  true,
  imports: [CommonModule, IonHeader, IonToolbar, IonTitle, IonContent, IonList, IonItem, IonThumbnail, IonLabel, IonButton],
})

export class HomePage {

  constructor(
    private dataapi:DataapiService,
  ) {}

  addToCart(datapro: any){
    let data = {
      name: datapro.name,
      price: datapro.price,
    }
    this.dataapi.addproduct(data).subscribe(
      (res) => {
        console.log(res)
      },
      (err) => {
        console.log(err)
      }
    )
  }

  product = [
    {
      id: 1,
      name: 'Yamaha R1',
      price: 899000,
      image: '../../assets/image/r1-2022-black-03.png'
    },
    {
      id: 2,
      name: 'Yamaha YZF-R6',
      price: 549000,
      image: '../../assets/image/Yamaha-YZF-R6-BLACK.png'
    },
    {
      id: 3,
      name: 'Yamaha R7',
      price: 339000,
      image: '../../assets/image/r7-yamaha-black--03-700x525.png'
    },
    {
      id: 4,
      name: 'Yamaha R15',
      price: 138000,
      image: '../../assets/image/R15.png'
    },
    {
      id: 5,
      name: 'Yamaha NMAX 155',
      price: 95000,
      image: '../../assets/image/Nmax.png'
    },
    {
      id: 6,
      name: 'XMAX TechMax',
      price: 224900,
      image: '../../assets/image/XMAX.png'
    },
  ]

}
