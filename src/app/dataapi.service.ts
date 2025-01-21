import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Router } from '@angular/router';

@Injectable({
  providedIn: 'root'
})
export class DataapiService {

  constructor(
    public http:HttpClient,
    public route:Router
  ) { }

  addproduct(product: any){
    return this.http.post('http://127.0.0.1/insert/insert.php', product);
  }

}
