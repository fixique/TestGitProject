//
//  ViewController.swift
//  TestGitProject
//
//  Created by Vladislav Krupenko on 04/08/2019.
//  Copyright © 2019 Surf. All rights reserved.
//

import UIKit

class ViewController: UIViewController {

    override func viewDidLoad() {
        super.viewDidLoad()
        let hello = Hello()
        hello.sayHello(name: "Vlad")
    }


}


class Hello {

    func sayHello(name: String) {
        print("Hello, \(name)")
    }

}
